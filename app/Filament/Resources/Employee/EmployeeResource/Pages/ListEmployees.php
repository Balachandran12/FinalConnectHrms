<?php

namespace App\Filament\Resources\Employee\EmployeeResource\Pages;

use App\Filament\Resources\Employee\EmployeeResource;
use EightyNine\ExcelImport\ExcelImportAction;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Support\Colors\Color;
use Filament\Forms\Components\ViewField;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;

class ListEmployees extends ListRecords
{

    protected static string $resource = EmployeeResource::class;

    protected static ?string $title = 'Employees';

    protected function getActions(): array
    {
        return [
            Action::make('import')
                ->hidden(!auth()->user()->hasPermissionTo('Employee Profiles'))
                ->icon('heroicon-o-arrow-down-tray')
                ->color('gray')
                ->url(fn (): string => route('filament.admin.resources.employees.import')),

            Action::make('Add Employee')
            ->modalHeading('Add New Employee')
            ->icon('heroicon-o-plus-circle')
            ->color(Color::Blue)
            ->modalSubmitActionLabel('Create')
                ->form([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('First Name')
                            ->required(),
                            TextInput::make('Last Name'),
                            Select::make('Gender')
                            ->required(),
                            TextInput::make('Email Address')
                            ->required(),
                            TextInput::make('Employee ID')
                            ->label('Employee ID')
                            ->required(),
                            Select::make('Employee Type')
                            ->required(),
                            TextInput::make('Department')
                            ->required(),
                            Select::make('Role')
                            ->required(),
                            DatePicker::make('Joining Date')
                            ->required(),
                            Select::make('Reporting To')
                            ->required(),
                            Select::make('Payroll Policy')
                            ->required(),
                            Select::make('Onboarding')
                            ->options([
                                'Select Onboarding' => 'Select Onboarding',
                            ])
                            ->default('Select Onboarding')
                            ->required(),
                        ])
                ])
                ->slideOver(),
            // Actions\CreateAction::make()->label('New Employee'),
        //    ExcelImportAction::make()
        //    ->use(\App\Imports\EmployeeImport::class)
        //     ->color("primary")
        //    ,
        ];
    }


    protected function getTableContentGrid(): ?array
{
    return [
        'md' => 2,
        'xl' => 3,
    ];

}
}
