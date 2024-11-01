<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use App\Imports\ImportUsers;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getHeader(): ?View
    {
        $data = Actions\CreateAction::make();
        return view('filament.custom.upload-file', compact('data'));
    }

    public $file = '';
    // public function save(){
    //     if($this->file != ''){
    //         Excel::import(new ImportUsers, $this->file);
    //     }
    //     // User::create([
    //     //     'name' => 'Aiman',
    //     //     'email' => 'f9IbM@example.com',
    //     //     'password' => 'password',
    //     // ]);
    // }
}
