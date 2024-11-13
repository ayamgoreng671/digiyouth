<?php

namespace App\Filament\Imports;

use App\Models\User;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class UserImporter extends Importer
{
    protected static ?string $model = User::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('name')
                ->rules(['max:255']),

            ImportColumn::make('email')
                ->rules(rules: ['max:255', 'unique:users,email']),

            ImportColumn::make('password')
                ->rules(['max:255']),

            ImportColumn::make('number')
                ->rules(['nullable', 'max:255']),

            ImportColumn::make('profile_picture')
                ->rules(['nullable', 'max:255']),

        ];
    }

    public function resolveRecord(): ?User
    {
        return User::firstOrNew([
            // Update existing records, matching them by `$this->data['column_name']`
            'email' => $this->data['email'],
        ]);
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your user import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}