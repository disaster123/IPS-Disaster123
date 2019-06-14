<?php

declare(strict_types=1);

class IPS_MQTT_Sender extends IPSModule
{

    public function Create()
    {
        //Never delete this line!
        parent::Create();
        $this->ConnectParent('{C6D2AEB3-6E1F-4B2E-8E69-3A1A00246850}');
    }

    public function ApplyChanges()
    {
        //Never delete this line!
        parent::ApplyChanges();
        $this->ConnectParent('{C6D2AEB3-6E1F-4B2E-8E69-3A1A00246850}');
    }

    public function publish($jsonstr)
    {
	$this->SendDataToParent($jsonstr);
    }
}
