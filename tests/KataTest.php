<?php

namespace Deogw\KataKotorLaravel\Tests;

use Deogw\KataKotorLaravel\KataKotor;

class KataTest extends TestCase
{
    /** @test */
    public function init_test()
    {
        $kataKotor = New KataKotor();

        $this->assertTrue($kataKotor->check('muka mu kayak memek'));
        $this->assertTrue($kataKotor->check('dasar BajingAn'));
        $this->assertFalse($kataKotor->check('Ini kata sopan'));

        $this->assertEquals('You are f*ck*ng b*st*rd', $kataKotor->masking('You are fucking bastard'));
        $this->assertEquals('Aku sayang kamu', $kataKotor->masking('Aku sayang kamu'));
    }

}
