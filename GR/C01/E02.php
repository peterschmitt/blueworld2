<?php include($_SERVER["DOCUMENT_ROOT"] . '/GR/Top.php') ?>
<h3>Exercise 2</h3>
Convert from natural to SI units:<br>
(a) Velocity \(v=10^{-2}\)
<div class="indent1">
    $$ v = 3*10^8 * 10^{-2}\frac{m}{s}=3*10^{6}\frac{m}{s}=3*10^{3}\frac{km}{s} $$
</div>
<br>
(b) Pressure \( 10^{19} \frac{kg}{m^{3}} \)
<br>

<div class="indent1">
    SI units of pressure are \( kg \frac{m}{s^2} * \frac{1}{m^2} = kg \frac{1}{s^2 m}\)
    <br> \( c = 1 \), therefore I can replace "1" with \( 10^8 \frac{m}{s} \) until the dimensions are right
    <br>
    $$ 10^{19} \frac{kg}{m^{3}} = 10^{19} \frac{kg}{m^{3}} * 10^{16} \frac{m^2}{s^2} = 10^{35} \frac{kg}{m \, s^2}$$
</div>

(c) Time t = 1018 m.
<div class="indent1">
    $$ t = 1018 m = 1018 m * \frac{1}{3^8\frac{m}{s}} = 3.4 * 10^{-6} s $$
    <a href="http://www.wolframalpha.com/input/?i=1018+%2F+%283*10%5E8%29">Calculation</a>
    <br>Note: Light travels 1018 m in 3.4 &mu;s  
</div>

(d) Energy density \( u = 1 \frac{kg}{ m^3} \).
<div class="indent1">
    $$ u = 1 \frac{kg}{ m^3} =  1 \frac{kg}{ m^3} * 10 * 10^{16}\frac{m^2}{s^2} = 10^{17} $$
</div>
(e) Acceleration 10 m−1 .

<div class="sig">Last update: DJan 31, 2015</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/GR/Bottom.php') ?>
