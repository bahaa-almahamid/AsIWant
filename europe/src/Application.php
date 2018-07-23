<?php
use App\AbstractApplication;
use Human\Human;
use Human\Bodyguard;
use Human\Commissionner;
use Human\VicePresident;
use Human\President;

/**
 * This class is the main application. You will overwrite the "run" method to implement your code
 *
 * @author matthieu vallance <matthieu.vallance@vesperiagroup.com>
 */
class Application extends AbstractApplication
{   

    /**
     * Run
     *
     * Execute the request process
     *
     * @return string|NULL
     */
    protected function run() : ?string
    {   
        $request = $this->getRequest();
        if($request->getMethod() == 'POST')
        {
            $date = new Date();
            $date->setDay($request->request->get('day'));
            $date->setMonth($request->request->get('month'));
            $date->setYear($request->request->get('year'));
            
            return json_encode($date);
            


            
        }
         return '
         <form method="POST">
            <label for="day">day</label>
            <input type="number" name="day" />
            <label for="month">month</label>
            <input type="number" name="month" />
            <label for="year">year</label>
            <input type="number" name="year" />
            <input type="submit" value="submit" />
        </from>';
    }
    



    
}

