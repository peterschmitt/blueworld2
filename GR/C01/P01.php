<?php include($_SERVER["DOCUMENT_ROOT"] . '/GR/Top.php') ?>
<h3>1.1 Fundamental Principles</h3>
Two principles are needed for special relativity:
    <ol>
        <li>
            <strong>Relativity</strong><br>
    This principle states that all physical processes are the same regardless of the (constant) speed of the whole system.
    So, whether the earth moves through the solar system or the sun itself moves through the galaxy, all experiment will yield the same result.
        </li>
        <li>
            <strong>Universal Speed of Light</strong><br>
    The speed of light is the same for every observer that is not accelerated.
        </li>
    </ol>
The principle of relativity dates back to Galileo (and then Newton). Galileo stated that a body in motion tends to stay in motion.
Later Newton more mathematically stated with \( F=m*a \), that interactions are independent of absolut motion:
    \( F = m * a = m * \frac{\mathrm{d} v}{\mathrm{d} t} \).

Let's change the system of reference with a constant speed of \(V_{0}\):
$$ v'=v + V_{0} \tag{1.1.1}$$ and
$$ F =  m * \frac{\mathrm{d} v'}{\mathrm{d} t}
= m * (\frac{\mathrm{d} v}{\mathrm{d} t} + \frac{\mathrm{d} V_{0}}{\mathrm{d} t} )
= m* \frac{\mathrm{d} v}{\mathrm{d} t} = m*a \tag{1.1.2}$$
Of course this implies that F and m are both unchanged under the change of reference, which is only true in non-relativistic mechanics.
<div class="sig">Last update Dec 27,2014</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/GR/Bottom.php') ?>
