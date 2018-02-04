<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Male(): void
    {
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_Female(): void
    {
        $result = AI::getGender('สวัสดีค่ะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Unknown(): void
    {
        $result = AI::getGender('');
        $expected_result = 'Unknown';
        $this->assertEquals($expected_result, $result);
    }
    public function testSentiment_Positive(): void
    {
        $result = AI::getSentiment('น่ารัก');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }
    public function testSentiment_Negative(): void
    {
        $result = AI::getSentiment('บ้า');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }
    public function testSentiment_Negative1(): void
    {
        $result = AI::getSentiment('เหี้ย');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }
    public function testRudeWords(): void
    {
        $result = AI::getRudeWords('สัส');
        $expected_result =  ['สัส'];
        $this->assertEquals($expected_result, $result);
    }
}