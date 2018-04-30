<?php $this->load->view('header',$this->data); ?>


    <div class="row innerpage" id="tag-page">
        <div class="col-xs-12">
            <h1 class="title">Bitcoin News</h1>
        </div>


        <div class="col-sm-12">
            <!--<table width="100%">-->
            <?php foreach($rows->result() as $row)
            {
            $image_url = $row->image == '' ? base_url().'uploads/articles/placeholder.png' : base_url().'uploads/articles/'.$row->image;
            //$image = base_url()."thumb.php?src=".$image_url."&w=200&h=200";

            ?>

                <!--<tr>
                    <td valign="top" width="200">
                        <a href="<?php /*echo base_url(); */?>welcome/newsdetail?id=<?php /*echo $row->article_id; */?>" >
                            <img src="<?php /*echo $image_url; */?>" alt="<?php /*echo $row->article; */?>" width="200">
                        </a>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;</td>
                    <td valign="top">
                        <h2 class="header">
                            <a href="<?php /*echo base_url(); */?>welcome/newsdetail?id=<?php /*echo $row->article_id; */?>"> <?php /*echo $row->article; */?> </a>
                        </h2>
                        <div class="info">
                            <span class="date"> <?php /*echo date("j M Y",strtotime($row->post_date)); */?> </span>
                        </div>
                        <p class="text">
                            <?php /*echo character_limiter($row->description,400); */?>
                        </p>
                    </td>
                </tr>-->
            <div class="row result">
                <figure class="col-sm-3">
                    <div class="">
                        <a href="<?php echo base_url(); ?>welcome/newsdetail?id=<?php echo $row->article_id; ?>" >
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $row->article; ?>" width="270">
                        </a>
                    </div>
                </figure>
                <figure class="col-sm-9">
                    <h2 class="header">
                        <a href="<?php echo base_url(); ?>welcome/newsdetail?id=<?php echo $row->article_id; ?>"> <?php echo $row->article; ?> </a>
                    </h2>
                    <div class="info">
                        <span class="date"> <?php echo date("j M Y",strtotime($row->post_date)); ?> </span>
                    </div>
                    <p class="text">
                        <?php echo $row->description; ?>
                    </p>
                </figure>
            </div>
                <div class="row">&nbsp;</div>
            <?php } ?>
            <!--</table>-->
            <?php echo $pagination_links; ?>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12">
            <!--<table width="100%">-->
            <?php
            $url = "https://cryptocurrencynews.com/category/basic-materials/daily-news/bitcoin-news/feed/";
            $string = file_get_contents($url);
            $xml = simplexml_load_string($string, 'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NOBLANKS);
            foreach($xml->channel->item as $item)
            {
                //my_var_dump($item);
                $description = $item->description;

                $doc = new DOMDocument();
                @$doc->loadHTML($description);

                $tags = $doc->getElementsByTagName('img');
                $image_url = utf8_decode($tags[0]->getAttribute('src'));
                $tags = $doc->getElementsByTagName('p');
                $desc = $tags[2]->nodeValue;

                ?>

                <!--<tr>
                    <td valign="top" width="200">
                        <a href="<?php /*echo $item->link; */?>" target="_blank" >
                            <img src="<?php /*echo $image_url; */?>" alt="<?php /*echo $item->title; */?>" width="200">
                        </a>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;</td>
                    <td valign="top">
                        <h2 class="header">
                            <a href="<?php /*echo $item->link; */?>" target="_blank"> <?php /*echo $item->title; */?> </a>
                        </h2>
                        <div class="info">
                            <span class="date"> <?php /*echo date("j M Y",strtotime($item->pubDate)); */?> </span>
                        </div>
                        <p class="text">
                             <?php /*echo $desc; */?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>-->

                <div class="row result">
                    <figure class="col-sm-3">
                        <div class="">
                            <a href="<?php echo $item->link; ?>" target="_blank" >
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $item->title; ?>" width="270">

                            </a>
                        </div>
                    </figure>
                    <figure class="col-sm-9">
                        <h2 class="header">
                            <a href="<?php echo $item->link; ?>" target="_blank" > <?php echo $item->title; ?> </a>
                        </h2>
                        <div class="info">
                            <span class="date"> <?php echo date("j M Y",strtotime($item->pubDate)); ?> </span>
                        </div>
                        <p class="text">
                            <?php echo $desc; ?>
                        </p>
                    </figure>
                </div>
                <div class="row">&nbsp;</div>
                <?php
            }


            ?>
            <!--</table>-->

        </div>
        <?php //echo $pagination_links; ?>
    </div>


<?php $this->load->view('footer',$this->data); ?>

