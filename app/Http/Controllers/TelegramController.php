<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Telegram\Bot\Api;
use Telegram\Bot\Objects\Update;
use Illuminate\Support\Facades\Log;
use App\Models\Message;

class TelegramController extends Controller
{
    protected $telegram;

    public function __construct()
    {
        $this->telegram = new Api(config('telegram.bot.token'));
    }

    public function webhook(Request $request)
    {
        try {
              // ✅ Respond immediately
            response()->json(['status' => 'ok'], 200)->send();
            //  fastcgi_finish_request(); 

            Log::info("Incoming Webhook", ['data'=>$request->all()]);
            $update = $this->telegram->getWebhookUpdates();
            
            if ($update->isType('message')) {
                $this->handleMessage($update->getMessage());
            } elseif ($update->isType('callback_query')) {
                $this->handleCallbackQuery($update->getCallbackQuery());
            }
            
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            Log::error('Telegram webhook error: ' . $e->getMessage());
            return response()->json(['status' => 'error'], 500);
        }
    }

    protected function handleMessage($message)
    {
        $chatId = $message->getChat()->getId();
        $text = $message->getText();
        $messageId = $message->getMessageId();
        
        $exploded_text = explode(' ', $text);
        $chatId = $exploded_text[0];
        if(!empty($chatId) && substr($chatId, 0, 1) == '@'){
            $chatId = substr($chatId, 1);
            unset( $exploded_text[0]);
            $text = implode(" ", $exploded_text);
        }
        // Store the incoming message
        Message::create([
            'type' => 1, // text message
            'sender' => $message->getFrom()->getFirstName() ?? 'Unknown',
            'message' => $text,
            'chat_id' => $chatId,
            'telegram_message_id' => $messageId,
            'is_from_telegram' => true
        ]);
        
        // Handle different commands
        switch ($text) {
            case '/start':
                $this->sendWelcomeMessage($chatId);
                break;
            case '/portfolio':
                $this->sendPortfolioInfo($chatId);
                break;
            case '/contact':
                $this->sendContactInfo($chatId);
                break;
            case '/services':
                $this->sendServicesInfo($chatId);
                break;
            default:
                $this->sendDefaultResponse($chatId);
        }
    }

    protected function handleCallbackQuery($callbackQuery)
    {
        $chatId = $callbackQuery->getMessage()->getChat()->getId();
        $data = $callbackQuery->getData();
        
        // Handle callback data
        switch ($data) {
            case 'portfolio':
                $this->sendPortfolioInfo($chatId);
                break;
            case 'services':
                $this->sendServicesInfo($chatId);
                break;
            case 'contact':
                $this->sendContactInfo($chatId);
                break;
        }
    }

    protected function sendWelcomeMessage($chatId)
    {
        $message = "🎉 Welcome to AVO Portfolio Agency!\n\n";
        $message .= "I'm your personal assistant. Here's what I can help you with:\n\n";
        $message .= "📁 /portfolio - View our latest work\n";
        $message .= "🛠️ /services - Our services\n";
        $message .= "📞 /contact - Get in touch\n\n";
        $message .= "What would you like to know about?";

        $keyboard = [
            ['📁 Portfolio', '🛠️ Services'],
            ['📞 Contact', '🌐 Website']
        ];

        $this->telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message,
            'reply_markup' => json_encode([
                'keyboard' => $keyboard,
                'resize_keyboard' => true,
                'one_time_keyboard' => false
            ])
        ]);
    }

    protected function sendPortfolioInfo($chatId)
    {
        $message = "�� Our Latest Work:\n\n";
        $message .= "• Cassette tape - Web Design\n";
        $message .= "• Miniwall Clock - Application\n";
        $message .= "• Avo Portfolio Agency - UI/UX Design\n";
        $message .= "• Hand Writing - Web Development\n";
        $message .= "• Keyboard - Illustration\n";
        $message .= "• Spiral - Web Development\n\n";
        $message .= "Visit our website to see more: https://yourdomain.com";

        $this->telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message
        ]);
    }

    protected function sendServicesInfo($chatId)
    {
        $message = "��️ Our Services:\n\n";
        $message .= "• UI/UX Design\n";
        $message .= "• Web Development\n";
        $message .= "• Product Design\n";
        $message .= "• Mobile Apps\n";
        $message .= "• SEO\n\n";
        $message .= "Ready to start your project? Contact us!";

        $this->telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message
        ]);
    }

    protected function sendContactInfo($chatId)
    {
        $message = "📞 Contact Information:\n\n";
        $message .= "📍 Address: 203 Fake St. Mountain View, San Francisco, California, USA\n";
        $message .= "�� Phone: +2 392 3929 210\n";
        $message .= "✉️ Email: info@yourdomain.com\n\n";
        $message .= "🌐 Website: https://yourdomain.com\n\n";
        $message .= "We'd love to hear from you!";

        $this->telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message
        ]);
    }

    protected function sendDefaultResponse($chatId)
    {
        $message = "I'm not sure I understand. Try one of these commands:\n\n";
        $message .= "/start - Welcome message\n";
        $message .= "/portfolio - View our work\n";
        $message .= "/services - Our services\n";
        $message .= "/contact - Contact information";

        $this->telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message
        ]);
    }

    public function setWebhook()
    {

        try {
            $result = $this->telegram->setWebhook([
                'url' => config('telegram.bot.webhook_url')
            ]);
            
            if ($result) {
                return response()->json(['status' => 'Webhook set successfully']);
            } else {
                return response()->json(['status' => 'Failed to set webhook'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function sendMessage(Request $request){
        try {
            $message = $request->input('message');
            $guest_name = $request->input('guest');
            if (!$message) {
                return response()->json(['status' => 'error', 'message' => 'Message is required'], 400);
            }
            
            $chatId = 862301736; // You might want to make this configurable
            $result = $this->telegram->sendMessage([
                'chat_id' => $chatId,
                'text' => $message
            ]);
            
            Message::create([
                'type' => 1, // text message
                'sender' => 'Unknown',
                'message' => $message,
                'chat_id' => $guest_name,
                'telegram_message_id' => $chatId,
                'is_from_telegram' => false
            ]);

            if ($result) {
                return response()->json(['status' => 'success', 'message' => 'Message sent successfully']);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Failed to send message'], 500);
            }
        } catch (\Exception $e) {
            Log::error('Error sending message: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Internal server error'], 500);
        }
    }

    // Add new method to get messages for a specific chat
    public function getMessages(Request $request)
    {
        try {
            Log::info("Messages Log");
            $chatId = $request->input('chat_id', 'default');
            
            $messages = Message::where('chat_id', $chatId)
                ->orderBy('created_at', 'asc')
                ->get()
                ->map(function ($message) {
                    return [
                        'id' => $message->id,
                        'sender' => $message->sender,
                        'message' => $message->message,
                        'is_from_telegram' => $message->is_from_telegram,
                        'time' => $message->created_at->format('H:i')
                    ];
                });
            Log::info("Messages Log", ['chat id'=>$chatId, 'messages'=>$messages]);
            return response()->json(['status' => 'success', 'messages' => $messages]);
        } catch (\Exception $e) {
            Log::error('Error getting messages: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Failed to get messages'], 500);
        }
    }

    public function removeWebhook()
    {
        try {
            $result = $this->telegram->removeWebhook();
            
            if ($result) {
                return response()->json(['status' => 'Webhook removed successfully']);
            } else {
                return response()->json(['status' => 'Failed to remove webhook'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}
