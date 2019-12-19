<?php
declare(strict_types=1);

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\Filter;

class LoginTest extends TestCase
{
    /**
     * @dataProvider getDataInput
     */
    public function testValidEmail($email, bool $expected)
    {
        $filter = new Filter();
        $this->assertEquals($filter->isEmail($email),$expected);
    }

    public function getDataInput() {
        return [
        ['foo@bar.com', true],
        ['foo', false]
        ];
        }
}
