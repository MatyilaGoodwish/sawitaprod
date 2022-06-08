<?php 

/**----------------------------------------------------------------------------
 * Common globals classes can be placed here
 *  
 */

class SecurityCapture {
    public function __construct() {
        $this->answer = rand(400,600);
        $this->challenge = rand(1,10);
    }
    public function start() : int {
        return $this->answer;
    }
    public function getChallenge() : int { 
        return $this->challenge;
    }
    public function tip() : int { 
        return $this->answer - $this->challenge;
    }
    
}
$capture = new SecurityCapture;

class CaptureVerification { 
    public function __construct($capture, $answer){
        $this->answer = $answer;
        $this->capture = $capture; 
    }
    public function validate () { 
        if($this->answer == $this->capture){ 
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

