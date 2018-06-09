<?php $this->load->view('header',$this->data); ?>

<?php
$show_member[1] = 0;
$show_member[2] = 0;
$show_member[3] = 0;
$show_member[4] = 0;

$show_member[$show] = 1;
?>
<div class="row innerpage">
    <div class="col-xs-12">

        <div class="<?php echo $show_member[1] ? '' : 'hide'; ?>">
            <h1>VIP Signals & Alerts</h1>
            <p>
                ICOSouq specialize in providing you complete analysis advice on how to succeed as a trader. As a valued member you will have access our Signal Channel and Private Chat Room. Our technical analysis guide is a collection of years experience expressed in an easy to understand fashion.
            </p>
            <p>
                Members are equipped to complete their own trading calls within a matter of days or weeks. With the community always available to debate price charts, trends and cryptocurrency news, you will always have a helping hand as you learn the ropes.
            </p>
            <p>
                Our VIP Signals is paid for service, with limited number of places available each month.
                To express your interest in joining, contact us.
            </p>
        </div>


        <div class="<?php echo $show_member[2] ? '' : 'hide'; ?>">
            <h1>ICO Analysis + Ratings</h1>
            <p>
                ICOSouq provides to our site visitors a shortlist of current and upcoming ICOs, however our private members will in addition will have access to a detailed assesment and weighting of key success criteria and factors.
            </p>
            <p>
                This includes quantified assessment of ICO supply, price, team experience, phase of implementation, security, and bonus and other key drivers.            </p>
            <p>
                To express your interest in joining, contact us.
            </p>
        </div>



        <div class="<?php echo $show_member[3] ? '' : 'hide'; ?>">
            <h1>ICO Souq Consierge</h1>
            <p>
                Based in Dubai, ICOSouq provides a tailored 1:1 in person consierge service to assit in setting up high networth individual accounts. This includes everything you need to know from how to buy cryptocurrencies and bitcoin to investing in the most thought after ICOs and managing your portfolio securely.
            </p>
            <p>
                To express your interest in enrolling, contact us.
            </p>
            <p>

            </p>
        </div>



        <div class="<?php echo $show_member[4] ? '' : 'hide'; ?>">
            <h1>VIP Events Calendar</h1>
            <p>
                Every quarter, ICOSouq hosts a private event for our members to meet and network at disclosed locations with speacial guest speakers and crypto-made millionairs.
            </p>
            <p>
                To express your interest in joining our next event, contact us.
            </p>
            <p>

            </p>
        </div>
    </div>
</div>


<?php $this->load->view('footer',$this->data); ?>

