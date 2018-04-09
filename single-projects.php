<?php get_header() ; ?>

    <section class="cd-page-wrapper">
        <div class="cd-page-section cd-project-section">
            <div class="cd-max-width">
                <h2>*<?php the_title() ; ?></h2>
            </div>
            <div class="cd-project-content">
                <div class="cd-project-description">
                    <?php the_content() ; ?>
                    <div class="cd-project-images">
                        <?php

                        $pics = get_field('project-images');

                        $count = count($pics) / 4;

                        $part = $count < 1 ? 1 : round($count);

                        $previousFirst = null;
                        $previousSecond = null;

                        foreach ( $pics as $key => $pic ) {

                            $pic = $pic['project-image'];
                            $k = $key+1;
                            //Set random numbers
                            $first = rand(0, 45);
                            $second = rand(0, 25);

                            //Check if almost the same number was set last time
                            $firstDiff = abs($first - $previousFirst);
                            $secondDiff = abs($second - $previousSecond);

                            //If same number was set add 4 to number
                            $first = $firstDiff > 6 ? $first : $first + 5;
                            $second = $secondDiff > 6 ? $second : $second + 5;

                            if ($k <= $part) {
                                $style = 'style="top: '.$first.'vh; left: '.$second.'vw;"';?>
                                <a href="<?php echo $pic; ?>" <?php echo $style ?> target="_blank"><img src="<?php echo $pic; ?>"/></a>
                            <?php }
                            else if ( $k > $part && $k <= ($part * 2) ){
                                $style = 'style="top: '.$first.'vh; right: '.$second.'vw;"'?>
                                <a href="<?php echo $pic; ?>" <?php echo $style ?> target="_blank"><img src="<?php echo $pic; ?>"/></a>
                            <?php }
                            else if ( $k > ($part * 2) && $k <= ($part * 3) ){
                                $style = 'style="bottom: '.$first.'vh; left: '.$second.'vw;"'?>
                                <a href="<?php echo $pic; ?>" <?php echo $style ?> target="_blank"><img src="<?php echo $pic; ?>"/></a>
                            <?php }
                            else if ( $k > ($part * 3) ){
                                $style = 'style="bottom: '.$first.'vh; right: '.$second.'vw;"'?>
                                <a href="<?php echo $pic; ?>" <?php echo $style ?> target="_blank"><img src="<?php echo $pic; ?>"/></a>
                            <?php }
                            //Remember set values
                            $previousFirst = $first;
                            $previousSecond = $second;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ; ?>



