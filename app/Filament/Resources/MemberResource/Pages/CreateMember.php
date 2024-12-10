<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;

    protected function getResdirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function geCreateNotification(): ?Notification
    {
        return Notification::make()
        ->success()
        ->title('Member Created')
        ->body('Member Created Successfully.');
    }
}
