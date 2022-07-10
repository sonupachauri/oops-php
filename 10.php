<?php
//dependecy Injection
//its design pattern
class Logger{
    public function log($message){
       echo "Logging message ".$message;
    }
}
class UserProfile{
    private $logger;
    public function createUser(){
       $this->logger->log("user created");
    }
    public function updateUser(){
        $this->logger->log("user updated");
    }
    public function __construct(Logger $logger){
        $this->logger=$logger;
    }
}

$logger = new Logger();
$profile = new UserProfile($logger);
echo $profile->createUser();

