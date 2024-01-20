<?php

namespace App\Filament\Resources\Settings\BudgetResource\Pages;

use App\Filament\Resources\Settings\BudgetResource;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBudget extends EditRecord
{
    protected static string $resource = BudgetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function mutateFormDataBeforeSave(array $data): array
    {

        if ($data['frequency'] == 'monthly') {
            $data['last_reset_date'] = Carbon::create($data['start_date'])->addMonths(1);
        }
        if ($data['frequency'] == 'yearly') {
            $data['last_reset_date'] = Carbon::create($data['start_date'])->addYears(1);
        }
        if ($data['frequency'] == 'half yearly') {
            $data['last_reset_date'] = Carbon::create($data['start_date'])->addMonths(6);
        }
        if ($data['frequency'] == 'quarterly') {
            $data['last_reset_date'] = Carbon::create($data['start_date'])->addMonths(3);
        }

        return $data;
    }
}
