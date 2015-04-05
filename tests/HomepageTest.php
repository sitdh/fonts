<?php

class HomepageTest extends TestCase 
{
    public function testHomepageShouldExists() 
    {
        $this->action('GET', 'WelcomeController@index');
        $this->assertResponseOk();
    }

}
