<?php

namespace App\Services;

use App\Models\Checklist;

class ChecklistService {

    public function sync_checklist(Checklist $checklist, int $user_id): Checklist
    {

        $checklist =  Checklist::firstOrCreate(
            [

            'checklist_id' => $checklist->id,
            'user_id' => $user_id,
        ],
        [


            'checklist_group_id' => $checklist->checklist_group_id,
            'name' => $checklist->name,

        ]);

        $checklist->touch();
        
        return $checklist;
    }

}
