<?php



/**
 * WhatsAppMessageLog.php - Model file
 *
 * This file is part of the WhatsAppService component.
 *-----------------------------------------------------------------------------*/

namespace App\Yantrana\Components\WhatsAppService\Models;

use App\Yantrana\Base\BaseModel;

use Illuminate\Database\Eloquent\Model;

class WhatsAppWebhookModel extends BaseModel
{
    /**
     * @var string - The database table used by the model.
     */
    protected $table = 'whatsapp_webhook_queue';
    protected $fillable = ['headers', 'payload', 'status', 'attempted_at', 'vendors__id'];
    protected $casts = [
        'headers' => 'array',
        'payload' => 'json',
        'attempted_at' => 'datetime',
    ];
}
