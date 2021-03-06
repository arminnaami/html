<?php

/**
 * @package    netzmacht/html
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace spec\Netzmacht\Html\Element;

use Netzmacht\Html\Element;
use Netzmacht\Html\Element\StaticElement;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StaticElementSpec extends ObjectBehavior
{
    const HTML = '<b>Test</b>';

    function let()
    {
        $this->beConstructedWith(static::HTML);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(StaticElement::class);
    }

    function it_casts_to_string()
    {
        $this->shouldHaveType(Element::class);
        $this->generate()->shouldReturn(static::HTML);
        $this->__toString()->shouldReturn(static::HTML);
    }
}
