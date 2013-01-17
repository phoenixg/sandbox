<?php  
require_once(dirname(__FILE__) . '/simpletest/autorun.php');  
require_once('./classes/guestbook.php');  

class TestGuestbook extends UnitTestCase {  
    function testViewGuestbookWithEntries()  
    {  
        $guestbook = new Guestbook();
        // Add new records first  
        $guestbook->add("Bob", "Hi, I'm Bob.");  
        $guestbook->add("Tom", "Hi, I'm Tom.");  
        $entries = $guestbook->viewAll();  
        $count_is_greater_than_zero = (count($entries) > 0);  
        $this->assertTrue($count_is_greater_than_zero);  
        $this->assertIsA($entries, 'array');  
        foreach($entries as $entry) {  
            $this->assertIsA($entry, 'array');  
            $this->assertTrue(isset($entry['name']));  
            $this->assertTrue(isset($entry['message']));  
        }  
    }  

    function testViewGuestbookWithNoEntries()  
    {  
        $guestbook = new Guestbook();  
        $guestbook->deleteAll(); 
        $entries = $guestbook->viewAll();  
        $this->assertEqual($entries, array());  
    }  
}  
