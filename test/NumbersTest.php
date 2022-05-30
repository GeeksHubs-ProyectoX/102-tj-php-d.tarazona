<?php

namespace Test;
use PHPUnit\Framework\TestCase;
use Numbers\Numbers;

class Test01Test extends TestCase
{

    public function test01 () {
        $expected = -1;
        $result = (new Numbers())->apply(1);
        $this->assertEquals($result, $expected );
    }

    public function test02 () {
        $expected = array(2);
        $result = (new Numbers())->apply(2);
        $this->assertEquals($result, $expected );
    }

    public function test03 () {
        $expected = array(2,3);
        $result = (new Numbers())->apply(3);
        $this->assertEquals($result, $expected );
    }

    public function test04 () {
        $expected = array(2,3,5,7);
        $result = (new Numbers())->apply(10);
        $this->assertEquals($result, $expected );
    }

    public function test05 () {
        $expected = array(2,3,5,7,11,13,17,19);
        $result = (new Numbers())->apply(20);
        $this->assertEquals($result, $expected );
    }

    public function test06 () {
        $expected = array(2,3,5,7,11,13,17,19,23,29);
        $result = (new Numbers())->apply(30);
        $this->assertEquals($result, $expected );
    }

    public function test07 () {
        $expected = array(2,3,5,7,11,13,17,19,23,29,31,37);
        $result = (new Numbers())->apply(40);
        $this->assertEquals($result, $expected );
    }

    public function test08 () {
        $expected = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);
        $result = (new Numbers())->apply(50);
        $this->assertEquals($result, $expected );
    }

    public function test09 () {
        $expected = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97);
        $result = (new Numbers())->apply(100);
        $this->assertEquals($result, $expected );
    }

    public function test10 () {
        $expected = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97,101,103,107,109,113,127,131,137,139,149,151,157,163,167,173,179,181,191,193,197,199,211,223,227,229,233,239,241,251,257,263,269,271,277,281,283,293,307,311,313,317,331,337,347,349,353,359,367,373,379,383,389,397,401,409,419,421,431,433,439,443,449,457,461,463,467,479,487,491,499);
        $result = (new Numbers())->apply(500);
        $this->assertEquals($result, $expected );
    }

    public function test11 () {
        $expected = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97,101,103,107,109,113,127,131,137,139,149,151,157,163,167,173,179,181,191,193,197,199,211,223,227,229,233,239,241,251,257,263,269,271,277,281,283,293,307,311,313,317,331,337,347,349,353,359,367,373,379,383,389,397,401,409,419,421,431,433,439,443,449,457,461,463,467,479,487,491,499,503,509,521,523,541,547,557,563,569,571,577,587,593,599,601,607,613,617,619,631,641,643,647,653,659,661,673,677,683,691,701,709,719,727,733,739,743,751,757,761,769,773,787,797,809,811,821,823,827,829,839,853,857,859,863,877,881,883,887,907,911,919,929,937,941,947,953,967,971,977,983,991,997);
        $result = (new Numbers())->apply(1000);
        $this->assertEquals($result, $expected );
    }

}
