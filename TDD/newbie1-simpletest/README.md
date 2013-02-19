教程地址： http://net.tutsplus.com/tutorials/php/the-newbies-guide-to-test-driven-development/

| 其他assertion方法        | 说明           | 
| ------------- |:-------------:|
| assertTrue($x)             |  Fail if $x is false |
| assertFalse($x)           |  Fail if $x is true |
|  assertNull($x)                                       |    Fail if $x is set   |
|         assertNotNull($x)                                |   Fail if $x not set   |
|     assertIsA($x, $t)                                    |   Fail if $x is not the class or type $t    |
|     assertNotA($x, $t)                                    |   Fail if $x is of the class or type $t    |
|    assertEqual($x, $y)                                     |    Fail if $x == $y is false   |
|         assertNotEqual($x, $y)	                                |  Fail if $x == $y is true     |
|        assertWithinMargin($x, $y, $m)                                 |     Fail if abs($x – $y) < $m is false  |
|      assertOutsideMargin($x, $y, $m)                                   |     Fail if abs($x – $y) < $m is true  |
|    assertIdentical($x, $y)                                     |   Fail if $x == $y is false or a type mismatch    |
|       assertNotIdentical($x, $y)                                  |   Fail if $x == $y is true and types match    |
|       assertReference($x, $y)	                                  |    Fail unless $x and $y are the same variable   |
|       assertClone($x, $y)                                  |    Fail unless $x and $y are identical copies   |
|      assertPattern($p, $x)                                   |    Fail unless the regex $p matches $x   |
|      assertNoPattern($p, $x)	                                   |  Fail if the regex $p matches $x     |
|           expectError($x)	                              |    Swallows any upcoming matching error   |
|            assert($e)                             |   Fail on failed expectation object $e    |	

	

详细列表见：http://www.simpletest.org/en/unit_test_documentation.html
	
	

	
	
	
	

	
	


	