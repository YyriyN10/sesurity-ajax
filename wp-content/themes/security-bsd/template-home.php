<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template Main
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package security-BSD
	 *
	 */

	get_header();
?>

	<!-- Main screen -->
<?php
	$mainScreenTitle = carbon_get_post_meta(get_the_ID(), 'security_main_screen_title'.security_lang_prefix());
	$mainScreenText = carbon_get_post_meta(get_the_ID(), 'security_main_screen_text'.security_lang_prefix());
	$mainScreenImageList = carbon_get_post_meta(get_the_ID(), 'security_main_screen_device_pic_list'.security_lang_prefix());

	if ( $mainScreenTitle && $mainScreenImageList):
		?>
		<section class="main-screen">
			<div class="container">
				<div class="row">
					<div class="content col-12">
            <div class="pic-list">
              <?php foreach( $mainScreenImageList as $pic ):?>
                <div class="pic">
                  <img
                     src="<?php echo wp_get_attachment_image_src($pic['image'], 'full')[0];?>"
                     alt="<?php echo get_post_meta($pic['image'], '_wp_attachment_image_alt', TRUE);?>"
                  >
                </div>
              <?php endforeach;?>
            </div>
            <h1><?php echo $mainScreenTitle;?></h1>

            <p class="text">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="32" viewBox="0 0 28 32" fill="none">
                <path d="M26.7293 5.18162L14.4793 0.0955547C14.1724 -0.0318203 13.8275 -0.0318828 13.5207 0.0955547L1.27069 5.18162C0.804125 5.37537 0.5 5.83087 0.5 6.33606V12.5189C0.5 21.0322 5.64556 28.6901 13.5276 31.9073C13.8304 32.0309 14.1696 32.0309 14.4724 31.9073C22.3543 28.6902 27.5 21.0322 27.5 12.5189V6.33606C27.5 5.83087 27.1959 5.37537 26.7293 5.18162ZM25 12.5189C25 19.7561 20.75 26.4184 14 29.3922C7.43038 26.4978 3 19.9522 3 12.5189V7.17056L14 2.60343L25 7.17056V12.5189ZM12.6184 16.7322L17.9911 11.3596C18.4792 10.8714 19.2707 10.8714 19.7589 11.3596C20.2471 11.8477 20.247 12.6392 19.7588 13.1273L13.5022 19.3839C13.014 19.8721 12.2226 19.8719 11.7345 19.3839L8.24113 15.8905C7.75294 15.4023 7.75294 14.6109 8.24113 14.1227C8.72931 13.6346 9.52075 13.6346 10.0089 14.1227L12.6184 16.7322Z" fill="url(#paint0_linear_353_417)"/>
                <defs>
                  <linearGradient id="paint0_linear_353_417" x1="2.2625" y1="-2.63703" x2="33.1264" y2="13.5428" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E"/>
                    <stop offset="1" stop-color="#F2D7A5"/>
                  </linearGradient>
                </defs>
              </svg>
              <span><?php echo $mainScreenText;?></span>
            </p>
					</div>
				</div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="button" data-toggle="modal" data-target="#formModal"><?php echo esc_html( pll__( 'Отримати консультацію' ) ); ?></a>
          </div>
        </div>
			</div>
		</section>
	<?php endif;?>
    <?php
	    $mainScreenGetList= carbon_get_post_meta(get_the_ID(), 'security_main_screen_get_list'.security_lang_prefix());

        if( $mainScreenGetList ):?>
        <!-- Що отримуєте -->
        <section class="get-list indent-top-small">
          <div class="container">
            <div class="row">
              <ul class="content col-12">
	              <?php foreach( $mainScreenGetList as $item ):?>
                    <li class="get-list__item">
                      <div class="get-list__icon">
                        <img src="<?php echo $item['icon'];?>" alt="" class="svg-pic">
                      </div>
                      <p class="get-list__text"><?php echo $item['text'];?></p>
                    </li>
	              <?php endforeach;?>
              </ul>
            </div>
          </div>
        </section>
    <?php endif;?>



	<!-- Переваги -->
<?php
	$productDescriptionBlTitle = carbon_get_post_meta( get_the_ID(), 'security_product_description_block_title'.security_lang_prefix());
	$productDescriptionAdvList = carbon_get_post_meta( get_the_ID(), 'security_product_description_advantages_list'.security_lang_prefix());
	$productDescriptionImage = carbon_get_post_meta( get_the_ID(), 'security_product_description_image'.security_lang_prefix());


	if ( $productDescriptionBlTitle && $productDescriptionAdvList && $productDescriptionImage):
?>
	<section class="product-description indent-top-small indent-bottom-small animation-tracking">
	  <div class="container">
	    <div class="row first-up">
	      <h2 class="col-12 block-title big-margin small-title text-center"><?php echo $productDescriptionBlTitle;?></h2>
	    </div>
	    <div class="row second-up">
        <div class="pic-wrapper col-lg-6">
          <img
             class="lazy"
             data-src="<?php echo wp_get_attachment_image_src($productDescriptionImage, 'full')[0];?>"
             alt="<?php echo get_post_meta($productDescriptionImage, '_wp_attachment_image_alt', TRUE);?>"
          >
        </div>
	      <div class="content col-lg-6">
        <?php foreach( $productDescriptionAdvList as $item ):?>
          <dl class="product-description__term-item">
            <dt class="product-description__term-title"><?php echo $item['title'];?></dt>
            <dd class="product-description__term-text"><?php echo $item['description'];?></dd>
          </dl>
        <?php endforeach;?>
	      </div>
	    </div>
	  </div>

    <svg class="bg-pic" width="945" height="945" viewBox="0 0 945 945" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.25">
        <path d="M852.282 564.145C827.707 665.681 765.077 751.58 675.853 805.977C586.703 860.393 481.652 876.85 380.102 852.273C278.551 827.695 192.652 765.022 138.25 675.864C83.8491 586.706 67.429 481.675 92.003 380.139C116.577 278.604 179.189 192.779 268.432 138.307C357.581 83.8921 462.632 67.4344 564.183 92.0122C665.733 116.59 751.558 179.244 805.959 268.402C860.417 357.653 876.856 462.61 852.282 564.145ZM94.928 380.847C70.5535 481.558 86.855 585.768 140.858 674.274C194.861 762.781 280.084 824.972 380.809 849.35C481.535 873.728 585.763 857.389 674.242 803.446C762.74 749.428 824.889 664.205 849.263 563.494C873.638 462.783 857.336 358.573 803.333 270.067C749.33 181.561 664.09 119.444 563.364 95.0663C462.639 70.6883 358.41 87.0277 269.931 140.971C181.451 194.913 119.303 280.136 94.928 380.847Z" fill="url(#paint0_linear_478_138)"/>
        <path d="M833.23 559.533C809.889 655.973 750.37 737.549 665.691 789.239C581.012 840.928 481.176 856.506 384.725 833.163C288.275 809.82 206.685 750.332 154.939 665.624C103.267 580.934 87.636 481.17 110.977 384.73C134.318 288.291 193.837 206.715 278.591 155.043C363.27 103.354 463.106 87.7756 559.557 111.119C656.007 134.462 737.597 193.95 789.268 278.64C840.94 363.33 856.571 463.094 833.23 559.533ZM113.977 385.456C90.8173 481.147 106.33 580.089 157.603 664.127C208.877 748.166 289.789 807.172 385.489 830.334C481.19 853.496 580.129 838.018 664.156 786.725C748.183 735.433 807.221 654.534 830.38 558.844C853.54 463.153 838.027 364.211 786.754 280.173C735.48 196.135 654.568 137.128 558.868 113.966C463.167 90.8046 364.228 106.283 280.201 157.575C196.174 208.867 137.118 289.841 113.977 385.456Z" fill="url(#paint1_linear_478_138)"/>
        <path d="M814.255 554.941C792.148 646.286 735.796 723.631 655.512 772.577C575.229 821.523 480.739 836.332 389.314 814.205C297.888 792.078 220.627 735.701 171.685 655.479C122.743 575.257 107.901 480.761 130.027 389.341C152.153 297.922 208.487 220.652 288.77 171.706C369.053 122.76 463.543 107.95 554.894 130.059C646.244 152.169 723.58 208.564 772.522 288.786C821.521 369.101 836.363 463.597 814.255 554.941ZM132.952 390.049C111.026 480.644 125.674 574.301 174.218 653.871C222.762 733.441 299.421 789.355 390.021 811.283C480.621 833.21 574.289 818.519 653.92 769.97C733.458 721.479 789.329 644.81 811.255 554.215C833.182 463.62 818.534 369.964 769.989 290.394C721.445 210.824 644.787 154.909 554.186 132.982C463.586 111.054 369.919 125.746 290.287 174.294C210.806 222.879 154.878 299.454 132.952 390.049Z" fill="url(#paint2_linear_478_138)"/>
        <path d="M795.207 550.332C774.314 636.656 721.091 709.602 645.26 755.897C569.522 802.136 480.229 816.141 393.903 795.248C307.578 774.355 234.628 721.163 188.358 645.316C142.07 569.544 128.111 480.259 149.004 393.935C169.896 307.611 223.119 234.665 298.95 188.369C374.763 142.149 463.981 128.126 550.307 149.019C636.632 169.912 709.583 223.104 755.852 298.951C802.122 374.798 816.081 464.083 795.207 550.332ZM152.004 394.661C131.311 480.161 145.151 568.624 190.966 643.726C236.78 718.828 309.128 771.557 394.629 792.251C480.129 812.944 568.582 799.132 643.668 753.291C718.754 707.45 771.514 635.105 792.206 549.606C812.899 464.106 799.059 375.643 753.244 300.541C707.412 225.514 635.157 172.728 549.581 152.016C464.081 131.323 375.628 145.135 300.542 190.976C225.457 236.817 172.697 309.162 152.004 394.661Z" fill="url(#paint3_linear_478_138)"/>
        <path d="M776.23 545.738C735.66 713.365 566.227 816.726 398.601 776.156C230.975 735.587 127.557 566.189 168.127 398.562C208.697 230.935 378.054 127.555 545.68 168.125C713.306 208.695 816.799 378.111 776.23 545.738ZM171.052 399.27C130.863 565.323 233.258 733.045 399.308 773.234C565.359 813.422 733.134 711.008 773.305 545.03C813.475 379.051 711.099 211.254 545.048 171.066C378.997 130.877 211.223 233.291 171.052 399.27Z" fill="url(#paint4_linear_478_138)"/>
        <g opacity="0.75">
          <path d="M757.18 541.128C719.149 698.264 560.316 795.227 403.115 757.181C245.914 719.135 148.979 560.348 187.027 403.137C225.076 245.926 383.892 149.038 541.093 187.085C698.293 225.131 795.211 383.992 757.18 541.128ZM190.027 403.863C152.378 559.426 248.29 716.537 403.841 754.184C559.391 791.831 716.605 695.983 754.255 540.42C791.905 384.858 695.993 227.747 540.442 190.1C384.891 152.453 227.659 248.376 190.027 403.863Z" fill="url(#paint5_linear_478_138)"/>
        </g>
        <g opacity="0.75">
          <path d="M738.129 536.517C702.638 683.162 554.422 773.652 407.721 738.147C261.02 702.642 170.567 554.467 206.077 407.747C241.569 261.101 389.785 170.612 536.485 206.117C683.186 241.622 773.621 389.871 738.129 536.517ZM209.077 408.473C173.966 553.545 263.453 700.137 408.503 735.243C553.554 770.348 700.168 680.899 735.279 535.827C770.39 390.755 680.904 244.163 535.853 209.057C390.802 173.952 244.17 263.476 209.077 408.473Z" fill="url(#paint6_linear_478_138)"/>
        </g>
        <g opacity="0.75">
          <path d="M719.156 531.924C686.203 668.079 548.605 752.096 412.404 719.132C276.203 686.168 192.25 548.531 225.203 412.376C258.156 276.221 395.754 192.204 531.955 225.168C668.156 258.132 752.109 395.769 719.156 531.924ZM228.053 413.065C195.481 547.647 278.485 683.627 413.036 716.192C547.587 748.756 683.584 665.78 716.156 531.198C748.728 396.617 665.724 260.637 531.173 228.072C396.622 195.507 260.607 278.559 228.053 413.065Z" fill="url(#paint7_linear_478_138)"/>
        </g>
        <g opacity="0.45">
          <path d="M700.105 527.313C669.673 653.052 542.635 730.503 416.934 700.08C291.233 669.657 213.688 542.613 244.102 416.949C274.516 291.285 401.572 213.759 527.273 244.182C652.973 274.605 730.519 401.649 700.105 527.313ZM247.102 417.675C217.069 541.766 293.591 667.134 417.641 697.158C541.692 727.181 667.147 650.696 697.18 526.605C727.213 402.515 650.691 277.146 526.565 247.104C402.44 217.063 277.135 293.585 247.102 417.675Z" fill="url(#paint8_linear_478_138)"/>
        </g>
        <g opacity="0.45">
          <path d="M681.13 522.721C653.237 637.969 536.799 709.021 421.598 681.14C306.397 653.259 235.335 536.826 263.227 421.578C291.12 306.329 407.559 235.277 522.76 263.158C637.96 291.04 709.005 407.547 681.13 522.721ZM266.078 422.268C238.584 535.867 308.623 650.624 422.248 678.124C535.874 705.625 650.636 635.594 678.13 521.994C705.624 408.395 635.585 293.638 521.959 266.138C408.334 238.637 293.571 308.668 266.078 422.268Z" fill="url(#paint9_linear_478_138)"/>
        </g>
        <g opacity="0.25">
          <path d="M662.08 518.111C636.727 622.869 530.906 687.448 426.13 662.09C321.429 636.75 256.774 530.911 282.128 426.153C307.482 321.396 413.303 256.816 518.079 282.175C622.836 307.608 687.416 413.428 662.08 518.111ZM285.128 426.879C260.173 529.988 323.805 634.152 426.855 659.092C529.906 684.033 634.125 620.494 659.08 517.385C684.035 414.276 620.404 310.113 517.353 285.172C414.303 260.231 310.083 323.77 285.128 426.879Z" fill="url(#paint10_linear_478_138)"/>
        </g>
        <g opacity="0.25">
          <path d="M643.029 513.499C620.215 607.766 525.011 665.872 430.735 643.055C336.46 620.238 278.362 525.029 301.177 430.762C323.992 336.495 419.196 278.389 513.471 301.206C607.747 324.023 665.826 419.307 643.029 513.499ZM304.177 431.488C281.761 524.107 338.892 617.733 431.518 640.151C524.143 662.568 617.764 605.427 640.179 512.809C662.595 420.191 605.464 326.564 512.839 304.147C420.213 281.729 326.593 338.87 304.177 431.488Z" fill="url(#paint11_linear_478_138)"/>
        </g>
        <g opacity="0.25">
          <path d="M624.054 508.907C603.778 592.683 519.117 644.298 435.417 624.04C351.641 603.764 300.026 519.167 320.302 435.391C340.485 351.672 425.164 299.982 508.865 320.24C592.64 340.515 644.312 425.205 624.054 508.907ZM323.152 436.081C303.275 518.209 353.924 601.223 436.049 621.099C518.175 640.976 601.177 590.308 621.054 508.181C640.931 426.053 590.283 343.038 508.157 323.162C426.032 303.286 343.029 353.953 323.152 436.081Z" fill="url(#paint12_linear_478_138)"/>
        </g>
        <g opacity="0.15">
          <path d="M605.004 504.297C587.267 577.582 513.224 622.724 439.948 604.989C366.673 587.255 321.483 513.177 339.202 439.966C356.921 366.756 430.982 321.539 504.258 339.274C577.533 357.008 622.723 431.086 605.004 504.297ZM342.202 440.692C324.864 512.329 369.03 584.732 440.731 602.085C512.356 619.42 584.816 575.244 602.154 503.607C619.492 431.97 575.326 359.567 503.626 342.214C431.925 324.861 359.54 369.055 342.202 440.692Z" fill="url(#paint13_linear_478_138)"/>
        </g>
        <g opacity="0.15">
          <path d="M586.031 499.707C570.833 562.502 507.389 601.245 444.614 586.052C381.838 570.859 343.132 507.392 358.33 444.598C373.527 381.803 436.971 343.06 499.747 358.253C562.504 373.521 601.229 436.912 586.031 499.707ZM361.18 445.288C346.381 506.434 384.064 568.224 445.264 583.036C506.465 597.848 568.232 560.127 583.031 498.981C597.83 437.835 560.147 376.044 498.946 361.232C437.821 346.438 375.978 384.141 361.18 445.288Z" fill="url(#paint14_linear_478_138)"/>
        </g>
        <g opacity="0.15">
          <path d="M566.979 495.094C554.32 547.397 501.494 579.668 449.143 566.998C396.868 554.346 364.569 501.473 377.228 449.169C389.887 396.865 442.713 364.595 495.063 377.265C547.395 390.01 579.638 442.79 566.979 495.094ZM380.228 449.895C367.968 500.55 399.243 551.748 449.869 564C500.569 576.271 551.719 545.023 563.979 494.367C576.239 443.712 544.963 392.515 494.338 380.262C443.713 368.01 392.488 399.24 380.228 449.895Z" fill="url(#paint15_linear_478_138)"/>
        </g>
        <g opacity="0.15">
          <path d="M548.005 490.502C537.885 532.316 495.601 558.095 453.826 547.984C411.976 537.855 386.234 495.612 396.354 453.799C406.474 411.986 448.758 386.207 490.533 396.318C532.308 406.428 558.125 448.689 548.005 490.502ZM399.279 454.507C389.558 494.672 414.333 535.332 454.533 545.062C494.734 554.791 535.341 530.034 545.08 489.795C554.801 449.63 530.026 408.97 489.826 399.24C449.607 389.586 409 414.343 399.279 454.507Z" fill="url(#paint16_linear_478_138)"/>
        </g>
        <g opacity="0.15">
          <path d="M528.955 485.892C521.374 517.214 489.708 536.52 458.358 528.933C427.008 521.345 407.674 489.696 415.254 458.373C422.835 427.051 454.502 407.745 485.852 415.333C517.202 422.92 536.536 454.569 528.955 485.892ZM418.254 459.099C411.073 488.773 429.365 518.822 459.065 526.01C488.765 533.198 518.755 514.914 525.955 485.166C533.137 455.492 514.845 425.443 485.144 418.255C455.444 411.067 425.436 429.426 418.254 459.099Z" fill="url(#paint17_linear_478_138)"/>
        </g>
        <g opacity="0.15">
          <path d="M509.904 481.282C504.862 502.113 483.813 514.946 462.964 509.9C442.114 504.854 429.262 483.816 434.304 462.985C439.346 442.153 460.395 429.32 481.245 434.366C502.094 439.412 514.946 460.45 509.904 481.282ZM437.304 463.711C432.661 482.894 444.471 502.33 463.746 506.995C482.946 511.642 502.411 499.775 507.054 480.592C511.697 461.409 499.887 441.972 480.612 437.307C461.337 432.642 441.947 444.528 437.304 463.711Z" fill="url(#paint18_linear_478_138)"/>
        </g>
      </g>
      <defs>
        <linearGradient id="paint0_linear_478_138" x1="360.016" y1="523.242" x2="458.644" y2="470.432" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint1_linear_478_138" x1="365.589" y1="520.657" x2="459.267" y2="470.482" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint2_linear_478_138" x1="371.233" y1="518.121" x2="459.988" y2="470.591" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint3_linear_478_138" x1="376.802" y1="515.568" x2="460.634" y2="470.683" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint4_linear_478_138" x1="382.497" y1="513.012" x2="461.376" y2="470.77" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint5_linear_478_138" x1="388.019" y1="510.448" x2="461.977" y2="470.843" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint6_linear_478_138" x1="393.636" y1="507.89" x2="462.655" y2="470.932" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint7_linear_478_138" x1="399.331" y1="505.35" x2="463.411" y2="471.04" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint8_linear_478_138" x1="404.854" y1="502.769" x2="464" y2="471.091" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint9_linear_478_138" x1="410.544" y1="500.245" x2="464.765" y2="471.219" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint10_linear_478_138" x1="416.069" y1="497.666" x2="465.356" y2="471.272" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint11_linear_478_138" x1="421.687" y1="495.106" x2="466.034" y2="471.361" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint12_linear_478_138" x1="427.38" y1="492.567" x2="466.787" y2="471.469" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint13_linear_478_138" x1="432.904" y1="489.988" x2="467.378" y2="471.522" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint14_linear_478_138" x1="438.596" y1="487.466" x2="468.144" y2="471.653" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint15_linear_478_138" x1="444.119" y1="484.883" x2="468.733" y2="471.702" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint16_linear_478_138" x1="449.813" y1="482.345" x2="469.488" y2="471.812" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint17_linear_478_138" x1="455.338" y1="479.765" x2="470.079" y2="471.864" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
        <linearGradient id="paint18_linear_478_138" x1="460.956" y1="477.208" x2="470.757" y2="471.954" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
          <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
          <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
        </linearGradient>
      </defs>
    </svg>

	</section>

  <?php endif;?>


<?php
	$clientsArgs = array(
		'posts_per_page' => -1,
		'orderby' 	 => 'date',
		'post_type'  => 'clients',
		'post_status'    => 'publish'
	);

	$clientsList = new WP_Query( $clientsArgs );

	if ( $clientsList->have_posts() ) :?>

      <!-- Our clients -->
      <section class="our-clients indent-top-small indent-bottom-big animation-tracking" id="our-clients">
        <div class="container">
          <div class="row">
            <h2 class="block-title col-12 small-title big-margin first-up"><?php echo esc_html( pll__( 'Нам довіряють' ) ); ?></h2>
          </div>
          <div class="row second-up">
            <div class="content col-12" id="clients-slider">
				<?php while ( $clientsList->have_posts() ) : $clientsList->the_post(); ?>
                  <div class="slide">
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                  </div>
				<?php endwhile;?>
            </div>
          </div>
        </div>
      </section>
	<?php endif; ?>
<?php wp_reset_postdata(); ?>

  <!-- Що це -->
<?php
  $whatIsBlTitle = carbon_get_post_meta( get_the_ID(), 'security_product_what_is_block_title'.security_lang_prefix());
	$whatIsBlText = carbon_get_post_meta( get_the_ID(), 'security_product_what_is_text'.security_lang_prefix());
	$whatIsBlMainDevice = carbon_get_post_meta( get_the_ID(), 'security_product_what_is_console_image'.security_lang_prefix());
	$whatIsBlDeviceList = carbon_get_post_meta( get_the_ID(), 'security_product_what_is_device_list'.security_lang_prefix());

	if ( $whatIsBlTitle && $whatIsBlText && $whatIsBlMainDevice && $whatIsBlDeviceList):
?>
  <section class="what-is indent-top-big indent-bottom-big animation-tracking">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title col-12 small-title small-margin text-center"><?php echo $whatIsBlTitle;?></h2>
      </div>
      <div class="row second-up">
        <div class="content col-12">
          <p class="what-is__text text-center"><?php echo $whatIsBlText;?></p>
          <div class="device-list-wrapper">
            <div class="device-item main-device">
              <p class="name"><?php echo esc_html( pll__( 'Центральна консоль Ajax Hub' ) ); ?></p>
              <div class="pic">
                <img
                   class="lazy"
                   data-src="<?php echo wp_get_attachment_image_src($whatIsBlMainDevice, 'full')[0];?>"
                   alt="<?php echo get_post_meta($whatIsBlMainDevice, '_wp_attachment_image_alt', TRUE);?>"
                >
              </div>
            </div>
            <?php foreach( $whatIsBlDeviceList as $device ):?>
              <div class="device-item other-device">
                <p class="name"><?php echo $device['name'];?></p>
                <img
                    class="lazy"
                    data-src="<?php echo wp_get_attachment_image_src($device['image'], 'full')[0];?>"
                    alt="<?php echo get_post_meta($device['image'], '_wp_attachment_image_alt', TRUE);?>"
                >
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!--Призив до дії -->
<?php
	$callToActionBlTitle = carbon_get_post_meta( get_the_ID(), 'security_call_to_action_block_title'.security_lang_prefix());
	$callToActionText = carbon_get_post_meta( get_the_ID(), 'security_call_to_action_text'.security_lang_prefix());

	if ( $callToActionBlTitle ):
		?>
      <section class="call-to-action indent-top-big indent-bottom-small animation-tracking">
        <div class="container">
          <div class="row">
            <div class="content col-12 first-up">
              <h2 class="block-title small-title"><?php echo $callToActionBlTitle;?></h2>
              <div class="text-content">
                <p><?php echo $callToActionText;?></p>
                <a href="#" class="button" data-toggle="modal" data-target="#formModal"><?php echo esc_html( pll__( 'Дізнатися більше' ) ); ?></a>
              </div>
            </div>

          </div>
        </div>
      </section>
	<?php endif;?>

  <!-- Характеристики -->
<?php
	$characteristicsBlTitle = carbon_get_post_meta( get_the_ID(), 'security_features_block_title'.security_lang_prefix());
	$characteristicsList = carbon_get_post_meta( get_the_ID(), 'security_features_list'.security_lang_prefix());

	if ( $characteristicsBlTitle && $characteristicsList ):
		?>
      <section class="characteristics indent-top-small animation-tracking">
        <div class="container">
          <div class="row first-up">
            <h2 class="block-title big-title big-margin col-12 text-center"><?php echo $characteristicsBlTitle;?></h2>
          </div>
          <div class="row">
            <div class="content col-12">
              <div class="bg-pic pic-1">
                <img data-src="<?php echo THEME_PATH;?>/assets/img/phone-ch-1.png" alt="" class="lazy">
              </div>
              <div class="bg-pic pic-2">
                <img data-src="<?php echo THEME_PATH;?>/assets/img/phone-ch-2.png" alt="" class="lazy">
              </div>
              <div class="bg-pic pic-3">
                <img data-src="<?php echo THEME_PATH;?>/assets/img/phone-ch-3.png" alt="" class="lazy">
              </div>
              <svg class="circle-pic" width="952" height="952" viewBox="0 0 952 952" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.25">
                  <path d="M854.785 378.897C880.691 480.101 865.653 585.34 812.353 675.224C759.128 765.089 674.06 828.885 572.841 854.795C471.622 880.705 366.364 865.629 276.507 812.39C186.65 759.151 122.897 674.082 96.9905 572.878C71.0843 471.675 86.1419 366.511 139.422 276.552C192.647 186.687 277.716 122.891 378.935 96.981C480.153 71.0709 585.337 86.1658 675.194 139.405C765.145 192.699 828.879 277.694 854.785 378.897ZM99.9059 572.132C125.602 672.514 188.865 756.913 278.065 809.763C367.265 862.613 471.699 877.582 572.095 851.882C672.492 826.183 756.889 762.877 809.744 673.743C862.579 584.535 877.51 480.12 851.814 379.738C826.118 279.356 762.855 194.957 673.655 142.107C584.456 89.2565 480.04 74.3628 379.644 100.062C279.247 125.762 194.85 189.068 141.995 278.201C89.1407 367.335 74.21 471.75 99.9059 572.132Z" fill="url(#paint0_linear_504_795)"/>
                  <path d="M835.796 383.757C860.402 479.882 846.083 579.843 795.529 665.204C744.975 750.566 664.099 811.14 567.964 835.749C471.828 860.357 371.871 846.074 286.445 795.52C201.094 744.948 140.508 664.161 115.902 568.036C91.2956 471.912 105.614 371.951 156.243 286.57C206.798 201.209 287.673 140.635 383.808 116.026C479.944 91.4173 579.901 105.701 665.252 156.274C750.603 206.846 811.19 287.633 835.796 383.757ZM118.892 567.271C143.307 662.649 203.403 742.765 288.097 792.949C372.79 843.132 471.924 857.309 567.312 832.891C662.7 808.474 742.829 748.409 792.994 663.705C843.159 579 857.37 479.862 832.955 384.484C808.54 289.107 748.444 208.99 663.75 158.807C579.056 108.623 479.923 94.4468 384.535 118.864C289.147 143.282 209.017 203.346 158.853 288.051C108.688 372.756 94.4961 471.968 118.892 567.271Z" fill="url(#paint1_linear_504_795)"/>
                  <path d="M816.883 388.599C840.189 479.645 826.684 574.384 778.726 655.261C730.767 736.138 654.254 793.526 563.127 816.853C472 840.179 377.324 826.613 296.479 778.707C215.634 730.801 158.215 654.297 134.89 563.176C111.565 472.056 125.089 377.392 173.047 296.515C221.006 215.637 297.519 158.25 388.571 134.942C479.623 111.634 574.374 125.182 655.219 173.088C736.158 221.049 793.577 297.553 816.883 388.599ZM137.805 562.43C160.92 652.729 217.774 728.582 297.962 776.099C378.15 823.616 472.077 837.056 562.382 813.94C652.686 790.824 728.528 733.926 776.097 653.705C823.611 573.579 837.008 479.664 813.893 389.365C790.778 299.066 733.924 223.213 653.736 175.696C573.548 128.179 479.621 114.739 389.317 137.855C299.012 160.971 223.17 217.869 175.601 298.089C128.181 378.271 114.691 472.131 137.805 562.43Z" fill="url(#paint2_linear_504_795)"/>
                  <path d="M797.897 393.46C819.922 479.502 807.118 568.888 761.849 645.336C716.636 721.691 644.335 775.931 558.292 797.957C472.249 819.982 382.873 807.207 306.44 761.912C230.026 716.692 175.83 644.377 153.805 558.335C131.78 472.293 144.584 382.907 189.853 306.459C235.14 230.085 307.367 175.864 393.41 153.838C479.453 131.813 568.829 144.588 645.262 189.883C721.695 235.178 775.891 307.493 797.897 393.46ZM156.795 557.57C178.61 642.79 232.316 714.435 307.998 759.285C383.68 804.136 472.306 816.784 557.527 794.969C642.748 773.154 714.397 719.478 759.221 643.781C804.045 568.083 816.721 479.446 794.907 394.225C773.092 309.005 719.386 237.36 643.704 192.51C568.041 147.734 479.471 134.992 394.175 156.826C308.954 178.641 237.305 232.317 192.481 308.014C147.657 383.712 134.98 472.35 156.795 557.57Z" fill="url(#paint3_linear_504_795)"/>
                  <path d="M778.981 398.301C821.75 565.38 720.567 736.122 553.489 778.891C386.411 821.66 215.634 720.534 172.865 553.455C130.096 386.375 231.205 215.652 398.283 172.883C565.361 130.115 736.212 231.221 778.981 398.301ZM175.78 552.708C218.148 718.219 387.235 818.345 552.743 775.978C718.251 733.611 818.414 564.483 776.066 399.047C733.717 233.611 564.611 133.41 399.103 175.777C233.595 218.144 133.432 387.272 175.78 552.708Z" fill="url(#paint4_linear_504_795)"/>
                  <g opacity="0.75">
                    <path d="M759.994 403.162C800.087 559.785 705.265 719.906 548.578 760.015C391.891 800.124 231.816 705.331 191.704 548.633C151.593 391.936 246.434 231.889 403.121 191.781C559.808 151.672 719.902 246.539 759.994 403.162ZM194.695 547.868C234.386 702.922 392.771 796.715 547.813 757.027C702.856 717.339 796.77 558.963 757.079 403.908C717.388 248.854 559.003 155.061 403.96 194.749C248.918 234.437 155.023 392.888 194.695 547.868Z" fill="url(#paint5_linear_504_795)"/>
                  </g>
                  <g opacity="0.75">
                    <path d="M741.005 408.022C778.421 554.188 689.942 703.613 543.721 741.043C397.499 778.473 248.126 690.013 210.691 543.772C173.275 397.606 261.754 248.181 407.976 210.751C554.197 173.321 703.59 261.855 741.005 408.022ZM213.681 543.007C250.696 687.605 398.473 775.12 543.05 738.111C687.626 701.102 775.179 553.347 738.165 408.749C701.15 264.151 553.373 176.636 408.796 213.645C264.219 250.654 176.686 398.483 213.681 543.007Z" fill="url(#paint6_linear_504_795)"/>
                  </g>
                  <g opacity="0.75">
                    <path d="M722.094 412.863C756.833 548.573 674.696 687.302 538.941 722.053C403.185 756.804 264.494 674.602 229.755 538.892C195.015 403.182 277.152 264.453 412.908 229.702C548.664 194.951 687.355 277.152 722.094 412.863ZM232.595 538.165C266.933 672.307 404.009 753.489 538.12 719.159C672.231 684.829 753.442 547.77 719.104 413.628C684.766 279.486 547.69 198.304 413.579 232.634C279.468 266.964 198.277 404.098 232.595 538.165Z" fill="url(#paint7_linear_504_795)"/>
                  </g>
                  <g opacity="0.45">
                    <path d="M703.105 417.723C735.187 543.051 659.298 671.029 534.008 703.101C408.718 735.173 280.654 659.323 248.592 534.07C216.529 408.816 292.398 280.764 417.688 248.692C542.978 216.62 671.042 292.469 703.105 417.723ZM251.582 533.304C283.243 656.989 409.617 731.839 533.263 700.188C656.908 668.537 731.851 542.155 700.189 418.469C668.528 294.784 542.154 219.935 418.434 251.605C294.714 283.275 219.921 409.619 251.582 533.304Z" fill="url(#paint8_linear_504_795)"/>
                  </g>
                  <g opacity="0.45">
                    <path d="M684.192 422.564C713.597 537.436 644.071 654.792 529.246 684.185C414.422 713.578 297.06 644.062 267.655 529.19C238.25 414.318 307.776 296.962 422.6 267.569C537.425 238.176 654.806 307.767 684.192 422.564ZM270.495 528.463C299.48 641.691 415.152 710.207 528.407 681.217C641.661 652.226 710.186 536.558 681.202 423.33C652.217 310.101 536.545 241.585 423.29 270.576C310.036 299.567 241.511 415.234 270.495 528.463Z" fill="url(#paint9_linear_504_795)"/>
                  </g>
                  <g opacity="0.25">
                    <path d="M665.205 427.425C691.933 531.841 628.75 638.501 524.316 665.234C419.958 691.948 313.222 628.784 286.494 524.368C259.766 419.953 322.949 313.293 427.383 286.56C531.835 259.902 638.496 323.085 665.205 427.425ZM289.484 523.603C315.792 626.375 420.837 688.539 523.551 662.246C626.265 635.953 688.523 530.963 662.215 428.191C635.907 325.419 530.862 263.255 428.148 289.547C325.434 315.84 263.176 420.831 289.484 523.603Z" fill="url(#paint10_linear_504_795)"/>
                  </g>
                  <g opacity="0.25">
                    <path d="M646.216 432.285C670.267 526.244 613.426 622.208 519.458 646.262C425.491 670.316 329.532 613.466 305.48 519.507C281.428 425.548 338.27 329.584 432.237 305.53C526.205 281.476 622.183 338.401 646.216 432.285ZM308.47 518.741C332.101 611.057 426.464 666.963 518.787 643.33C611.11 619.697 667.006 525.328 643.375 433.012C619.744 340.696 525.381 284.791 433.058 308.423C340.735 332.056 284.839 426.425 308.47 518.741Z" fill="url(#paint11_linear_504_795)"/>
                  </g>
                  <g opacity="0.25">
                    <path d="M627.303 437.126C648.678 520.629 598.104 605.916 514.677 627.272C431.175 648.646 345.918 598.13 324.543 514.627C303.112 431.218 353.667 345.857 437.094 324.501C520.596 303.126 605.947 353.699 627.303 437.126ZM327.384 513.9C348.338 595.759 431.999 645.332 513.856 624.378C595.714 603.424 645.267 519.751 624.312 437.892C603.358 356.033 519.697 306.46 437.839 327.414C355.982 348.368 306.429 432.041 327.384 513.9Z" fill="url(#paint12_linear_504_795)"/>
                  </g>
                  <g opacity="0.15">
                    <path d="M608.315 441.988C627.013 515.034 582.782 589.625 509.746 608.32C436.71 627.016 362.061 582.777 343.381 509.806C324.702 436.834 368.914 362.169 441.95 343.473C514.986 324.777 589.636 369.016 608.315 441.988ZM346.372 509.04C364.649 580.443 437.609 623.682 509.075 605.388C580.467 587.114 623.752 514.118 605.474 442.715C587.196 371.312 514.237 328.073 442.771 346.367C371.304 364.661 328.094 437.637 346.372 509.04Z" fill="url(#paint13_linear_504_795)"/>
                  </g>
                  <g opacity="0.15">
                    <path d="M589.405 446.831C605.427 509.42 567.557 573.39 504.987 589.407C442.417 605.423 378.469 567.517 362.447 504.927C346.426 442.338 384.295 378.368 446.865 362.352C509.455 346.409 573.383 384.241 589.405 446.831ZM365.288 504.2C380.889 565.147 443.147 602.053 504.148 586.438C565.148 570.823 602.016 508.542 586.415 447.596C570.814 386.65 508.556 349.743 447.555 365.358C386.63 380.954 349.687 443.254 365.288 504.2Z" fill="url(#paint14_linear_504_795)"/>
                  </g>
                  <g opacity="0.15">
                    <path d="M570.414 451.689C583.759 503.823 552.232 557.096 500.053 570.453C447.948 583.791 394.628 552.237 381.283 500.103C367.938 447.97 399.464 394.697 451.644 381.34C503.842 368.058 557.069 399.556 570.414 451.689ZM384.273 499.338C397.197 549.828 448.828 580.382 499.288 567.465C549.823 554.529 580.348 502.945 567.424 452.455C554.499 401.965 502.868 371.411 452.408 384.328C401.948 397.244 371.348 448.848 384.273 499.338Z" fill="url(#paint15_linear_504_795)"/>
                  </g>
                  <g opacity="0.15">
                    <path d="M551.502 456.531C562.171 498.208 536.912 540.805 495.273 551.463C453.56 562.141 411.015 536.901 400.347 495.224C389.678 453.548 414.937 410.951 456.576 400.293C498.215 389.634 540.834 414.855 551.502 456.531ZM403.262 494.478C413.51 534.511 454.459 558.807 494.527 548.55C534.596 538.294 558.854 497.386 548.587 457.278C538.339 417.244 497.391 392.949 457.322 403.205C417.272 413.537 393.015 454.445 403.262 494.478Z" fill="url(#paint16_linear_504_795)"/>
                  </g>
                  <g opacity="0.15">
                    <path d="M532.515 461.392C540.507 492.612 521.59 524.513 490.342 532.511C459.095 540.51 427.177 521.622 419.186 490.402C411.194 459.182 430.11 427.281 461.358 419.283C492.606 411.284 524.523 430.172 532.515 461.392ZM422.176 489.637C429.747 519.214 459.994 537.176 489.597 529.598C519.2 522.021 537.115 491.809 529.525 462.157C521.954 432.58 491.707 414.618 462.104 422.195C432.501 429.773 414.605 460.06 422.176 489.637Z" fill="url(#paint17_linear_504_795)"/>
                  </g>
                  <g opacity="0.15">
                    <path d="M513.526 466.253C518.841 487.017 506.268 508.221 485.486 513.541C464.704 518.861 443.488 506.306 438.173 485.542C432.858 464.779 445.432 443.574 466.214 438.254C486.996 432.935 508.211 445.49 513.526 466.253ZM441.164 484.777C446.058 503.897 465.603 515.527 484.815 510.609C503.952 505.71 515.58 486.101 510.685 466.981C505.791 447.86 486.246 436.23 467.034 441.148C447.822 446.066 436.269 465.656 441.164 484.777Z" fill="url(#paint18_linear_504_795)"/>
                  </g>
                </g>
                <defs>
                  <linearGradient id="paint0_linear_504_795" x1="400.814" y1="573.599" x2="463.164" y2="480.707" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_504_795" x1="404.525" y1="568.702" x2="463.738" y2="480.459" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_504_795" x1="408.32" y1="563.816" x2="464.425" y2="480.217" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_504_795" x1="412.042" y1="558.95" x2="465.039" y2="479.995" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint4_linear_504_795" x1="415.873" y1="554.022" x2="465.735" y2="479.724" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint5_linear_504_795" x1="419.548" y1="549.168" x2="466.3" y2="479.506" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint6_linear_504_795" x1="423.31" y1="544.274" x2="466.941" y2="479.267" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint7_linear_504_795" x1="427.149" y1="539.361" x2="467.659" y2="479.009" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint8_linear_504_795" x1="430.817" y1="534.491" x2="468.204" y2="478.778" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint9_linear_504_795" x1="434.659" y1="529.593" x2="468.939" y2="478.532" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint10_linear_504_795" x1="438.33" y1="524.724" x2="469.486" y2="478.302" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint11_linear_504_795" x1="442.091" y1="519.83" x2="470.126" y2="478.062" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint12_linear_504_795" x1="445.929" y1="514.918" x2="470.843" y2="477.804" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint13_linear_504_795" x1="449.599" y1="510.049" x2="471.389" y2="477.574" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint14_linear_504_795" x1="453.444" y1="505.153" x2="472.127" y2="477.33" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint15_linear_504_795" x1="457.111" y1="500.281" x2="472.67" y2="477.098" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint16_linear_504_795" x1="460.95" y1="495.37" x2="473.388" y2="476.84" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint17_linear_504_795" x1="464.62" y1="490.5" x2="473.935" y2="476.609" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                  <linearGradient id="paint18_linear_504_795" x1="468.383" y1="485.607" x2="474.576" y2="476.371" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
                    <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
                    <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
                  </linearGradient>
                </defs>
              </svg>

              <ul class="characteristics-list">
              <?php foreach( $characteristicsList as $item ): ?>
                <li class="characteristics-list__item">
                  <div class="inner">
                    <div class="characteristics-list__icon">
                      <img src="<?php echo $item['icon'];?>" alt="" class="svg-pic">
                    </div>
                    <p class="characteristics-list__text"><?php echo $item['text'];?></p>
                  </div>
                </li>
              <?php endforeach;?>
              </ul>
            </div>

          </div>
        </div>
      </section>
	<?php endif;?>

    <!-- Слоган -->
<?php
  $sloganText = carbon_get_post_meta( get_the_ID(), 'security_slogan_text'.security_lang_prefix());
	$sloganVideoBg = carbon_get_post_meta( get_the_ID(), 'security_slogan_video'.security_lang_prefix());
	$sloganBlockTitle = carbon_get_post_meta( get_the_ID(), 'security_slogan_title'.security_lang_prefix());
	$sloganMontage = carbon_get_post_meta( get_the_ID(), 'security_slogan_montage'.security_lang_prefix());

    if ( $sloganText && $sloganVideoBg && $sloganBlockTitle && $sloganMontage):
?>
    <section class="slogan animation-tracking">
      <div class="container">
        <div class="row first-up">
          <h2 class="block-title col-12 small-title small-margin text-center"><?php echo $sloganBlockTitle;?></h2>
          <p class="subtitle col-lg-10 offset-lg-1 text-center"><?php echo $sloganText;?></p>
          <p class="montage col-12 text-center">
            <span><?php echo $sloganMontage;?></span>
          </p>
        </div>
      </div>
      <video src="<?php echo $sloganVideoBg;?>" data-src="" autoplay loop="loop" playsinline="" muted="" autoplay type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></video>

      </video>
    </section>
<?php endif;?>

    <!-- Про нас -->
<?php
  $aboutUsBlTitle = carbon_get_post_meta( get_the_ID(), 'security_about_us_block_title'.security_lang_prefix());
	$aboutUsText = carbon_get_post_meta( get_the_ID(), 'security_about_us_text'.security_lang_prefix());
	$aboutUsList = carbon_get_post_meta( get_the_ID(), 'security_about_us_list'.security_lang_prefix());
	$aboutUsAssertionText = carbon_get_post_meta( get_the_ID(), 'security_about_us_assertion_text'.security_lang_prefix());
	$aboutUsAssertionImage = carbon_get_post_meta( get_the_ID(), 'security_about_us_assertion_image'.security_lang_prefix());

	if ( $aboutUsBlTitle && $aboutUsList ):
?>
    <section class="about-us indent-top-big indent-bottom-big animation-tracking">
      <div class="container">
        <div class="row first-up">
          <h2 class="block-title big-title col-12 small-margin"><?php echo $aboutUsBlTitle;?></h2>
          <?php if( $aboutUsText ):?>
            <p class="subtitle col-lg-11"><?php echo $aboutUsText;?></p>
          <?php endif;?>
        </div>
        <div class="row second-up">
          <ul class="content col-12">
            <?php foreach( $aboutUsList as $item ):?>
              <li class="item">
                <?php if( $item['select_type'] == 'image'):?>
                  <div class="item__icon"><img src="<?php echo $item['image'];?>" alt="" class="svg-pic"></div>
                <?php endif;?>
	              <?php if( $item['select_type'] == 'text'):?>
                    <p class="item__sens">
                      <?php echo $item['sense'];?>
                    </p>
	              <?php endif;?>

                <p class="item__text"><?php echo $item['text'];?></p>
              </li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
      <svg class="bg-pic" width="1737" height="1446" viewBox="0 0 1737 1446" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.45">
          <path d="M1269.65 339.859C1144.89 294.133 1009.8 299.708 889.233 355.667C768.703 411.535 677.089 511.036 631.352 635.82C585.614 760.604 591.225 895.741 647.1 1016.27C702.976 1136.79 802.47 1228.35 927.224 1274.08C1051.98 1319.81 1186.98 1314.2 1307.64 1258.27C1428.17 1202.41 1519.78 1102.9 1565.52 978.121C1611.26 853.337 1605.61 718.291 1549.74 597.765C1493.8 477.113 1394.4 385.586 1269.65 339.859ZM928.541 1270.49C804.8 1225.13 706.091 1134.28 650.624 1014.63C595.157 894.987 589.576 760.906 634.942 637.136C680.308 513.366 771.216 414.651 890.773 359.159C1010.42 303.7 1144.46 298.157 1268.21 343.512C1391.95 388.867 1490.66 479.723 1546.12 599.367C1601.59 719.012 1607.08 853.059 1561.71 976.829C1516.35 1100.6 1425.44 1199.31 1305.88 1254.81C1186.33 1310.3 1052.28 1315.84 928.541 1270.49Z" fill="url(#paint0_linear_415_10)"/>
          <path d="M1205.46 342.89C1086.97 299.458 958.644 304.797 844.155 357.86C729.666 410.924 642.666 505.53 599.225 624.047C555.785 742.565 561.072 870.893 614.115 985.467C667.193 1099.95 761.673 1186.96 880.166 1230.39C998.659 1273.82 1126.99 1268.48 1241.51 1215.32C1356 1162.26 1443 1067.65 1486.44 949.137C1529.88 830.62 1524.59 702.292 1471.52 587.81C1418.44 473.327 1323.96 386.322 1205.46 342.89ZM881.517 1226.7C763.945 1183.61 670.25 1097.31 617.581 983.706C564.911 870.105 559.655 742.833 602.758 625.238C645.861 507.642 732.121 413.915 845.729 361.26C959.337 308.605 1086.61 303.298 1204.18 346.392C1321.75 389.486 1415.45 475.786 1468.12 589.387C1520.79 702.988 1526.04 830.259 1482.94 947.855C1439.84 1065.45 1353.58 1159.18 1239.97 1211.83C1126.36 1264.49 998.998 1269.76 881.517 1226.7Z" fill="url(#paint1_linear_415_10)"/>
          <path d="M1141.31 345.825C1029.08 304.688 907.467 309.664 798.985 360.016C690.503 410.368 608.092 499.861 566.915 612.204C525.737 724.547 530.793 846.099 581.072 954.538C631.352 1062.98 720.818 1145.43 833.142 1186.6C945.467 1227.77 1066.99 1222.76 1175.47 1172.41C1283.95 1122.05 1366.36 1032.56 1407.51 920.31C1448.65 808.06 1443.63 686.415 1393.35 577.976C1343.01 469.411 1253.55 386.962 1141.31 345.825ZM834.46 1183C723.148 1142.2 634.433 1060.55 584.562 952.994C534.691 845.437 529.7 724.849 570.505 613.52C611.311 502.191 693.016 413.485 800.617 363.542C908.092 313.657 1028.65 308.712 1139.96 349.511C1251.27 390.311 1339.99 471.962 1389.86 579.52C1439.73 687.077 1444.72 807.665 1403.92 918.994C1363.11 1030.32 1281.41 1119.03 1173.81 1168.97C1066.27 1218.73 945.771 1223.8 834.46 1183Z" fill="url(#paint2_linear_415_10)"/>
          <path d="M1077.13 348.852C971.069 309.975 856.316 314.749 753.783 362.264C651.376 409.72 573.487 494.284 534.607 600.36C495.726 706.436 500.458 821.178 547.997 923.7C595.445 1026.19 680.023 1104.02 786.087 1142.9C892.151 1181.77 1006.9 1177 1109.44 1129.49C1211.88 1081.94 1289.73 997.466 1328.61 891.39C1367.49 785.315 1362.76 670.572 1315.22 568.05C1267.68 465.529 1183.1 387.694 1077.13 348.852ZM787.438 1139.21C682.387 1100.71 598.595 1023.58 551.521 922.064C504.448 820.55 499.781 706.772 538.29 601.71C576.798 496.648 653.889 412.836 755.415 365.789C856.942 318.742 970.73 314.033 1075.78 352.538C1180.83 391.043 1264.62 468.172 1311.7 569.686C1358.68 671.166 1363.47 784.886 1324.93 890.04C1286.42 995.102 1209.33 1078.91 1107.8 1125.96C1006.28 1173.01 892.489 1177.72 787.438 1139.21Z" fill="url(#paint3_linear_415_10)"/>
          <path d="M1012.98 351.79C807.024 276.299 578.013 382.519 502.515 588.495C427.017 794.472 533.138 1023.53 739.098 1099.02C945.057 1174.51 1174.03 1068.38 1249.53 862.407C1325.03 656.431 1218.94 427.282 1012.98 351.79ZM740.415 1095.43C536.389 1020.64 431.318 793.853 506.106 589.812C580.894 385.77 807.732 280.636 1011.67 355.385C1215.6 430.133 1320.76 656.958 1245.98 860.999C1171.19 1065.04 944.349 1170.17 740.415 1095.43Z" fill="url(#paint4_linear_415_10)"/>
          <path d="M948.798 354.817C755.729 284.05 540.972 383.577 470.17 576.743C399.368 769.91 498.844 984.614 692.005 1055.41C885.167 1126.21 1099.83 1026.65 1170.63 833.487C1241.44 640.321 1141.87 425.583 948.798 354.817ZM693.356 1051.73C502.22 981.67 403.794 769.232 473.853 578.093C543.912 386.954 756.345 288.353 947.481 358.411C1138.62 428.469 1237.04 640.906 1166.98 832.045C1096.93 1023.18 884.4 1121.75 693.356 1051.73Z" fill="url(#paint5_linear_415_10)"/>
          <path d="M884.616 357.846C704.436 291.804 504.026 384.672 437.953 564.936C371.88 745.2 464.711 945.551 644.983 1011.63C825.163 1077.67 1025.57 984.801 1091.65 804.537C1157.72 624.273 1064.8 423.888 884.616 357.846ZM646.334 1007.94C468.088 942.607 376.248 744.397 441.578 566.16C506.908 387.923 705.086 296.015 883.332 361.348C1061.58 426.682 1153.42 624.892 1088.09 803.129C1022.76 981.365 824.488 1073.24 646.334 1007.94Z" fill="url(#paint6_linear_415_10)"/>
          <path d="M820.467 360.78C653.177 299.462 467.114 385.671 405.77 553.033C344.426 720.395 430.704 906.426 597.994 967.744C765.285 1029.06 951.348 942.853 1012.69 775.491C1074.04 608.129 987.758 422.098 820.467 360.78ZM599.278 964.242C433.921 903.633 348.726 719.776 409.327 554.441C469.928 389.107 653.759 303.857 819.116 364.466C984.473 425.075 1069.67 608.932 1009.07 774.267C948.467 939.602 764.543 1024.82 599.278 964.242Z" fill="url(#paint7_linear_415_10)"/>
          <path d="M756.284 363.809C601.792 307.183 430.133 386.858 373.518 541.318C316.904 695.778 396.503 867.548 550.904 924.141C705.304 980.734 877.054 901.092 933.669 746.632C990.284 592.173 910.685 420.403 756.284 363.809ZM552.255 920.454C399.788 864.57 321.238 695.066 377.109 542.634C432.981 390.202 602.5 311.519 754.967 367.404C907.434 423.288 985.984 592.792 930.079 745.316C874.173 897.841 704.722 976.339 552.255 920.454Z" fill="url(#paint8_linear_415_10)"/>
          <path d="M692.135 366.748C550.532 314.845 393.129 387.828 341.243 529.386C289.357 670.943 362.312 828.36 503.915 880.262C645.517 932.164 802.921 859.182 854.807 717.624C906.692 576.067 833.646 418.616 692.135 366.748ZM505.198 876.76C365.621 825.6 293.716 670.45 344.892 530.827C396.068 391.205 551.207 319.274 690.784 370.434C830.361 421.594 902.266 576.745 851.09 716.367C799.914 855.989 644.776 927.92 505.198 876.76Z" fill="url(#paint9_linear_415_10)"/>
          <path d="M627.95 369.772C499.237 322.594 356.18 388.918 308.99 517.665C261.833 646.32 328.109 789.476 456.822 836.653C585.535 883.831 728.592 817.508 775.782 688.761C822.88 559.98 756.571 416.916 627.95 369.772ZM458.173 832.967C331.485 786.532 266.259 645.642 312.673 519.015C359.086 392.387 499.911 327.023 626.599 373.459C753.286 419.894 818.513 560.783 772.099 687.411C725.686 814.038 584.861 879.402 458.173 832.967Z" fill="url(#paint10_linear_415_10)"/>
          <path d="M563.707 372.97C447.884 330.517 319.174 390.181 276.713 506.026C234.251 621.871 293.916 750.581 409.739 793.034C525.562 835.488 654.272 775.823 696.734 659.978C739.195 544.134 679.438 415.39 563.707 372.97ZM411.09 789.348C297.292 747.637 238.619 621.068 280.337 507.25C322.055 393.433 448.625 334.761 562.423 376.472C676.221 418.183 734.895 544.753 693.177 658.57C651.459 772.387 524.888 831.059 411.09 789.348Z" fill="url(#paint11_linear_415_10)"/>
          <path d="M499.556 375.905C396.622 338.177 282.225 391.274 244.527 494.124C206.795 597.067 259.814 711.424 362.748 749.152C465.556 786.94 580.045 733.876 617.743 631.025C655.475 528.083 602.397 413.6 499.556 375.905ZM364.032 745.65C263.123 708.664 211.095 596.448 248.084 495.533C285.073 394.618 397.296 342.605 498.205 379.592C599.113 416.578 651.141 528.794 614.152 629.709C577.163 730.624 464.94 782.637 364.032 745.65Z" fill="url(#paint12_linear_415_10)"/>
          <path d="M435.372 378.934C345.329 345.929 245.278 392.368 212.276 482.408C179.273 572.448 225.705 672.577 315.657 705.548C405.609 738.518 505.751 692.114 538.754 602.074C571.757 512.033 525.324 411.904 435.372 378.934ZM317.008 701.861C228.99 669.6 183.607 571.737 215.9 483.632C248.16 395.619 346.07 350.174 434.089 382.436C522.107 414.697 567.491 512.561 535.197 600.665C502.904 688.77 405.027 734.123 317.008 701.861Z" fill="url(#paint13_linear_415_10)"/>
          <path d="M382.343 385.941C305.188 357.661 219.393 397.407 191.119 474.545C162.846 551.682 202.633 637.458 279.787 665.738C356.942 694.018 442.737 654.272 471.011 577.134C499.192 499.963 459.497 414.221 382.343 385.941ZM281.071 662.236C205.942 634.699 167.204 551.189 194.768 475.987C222.333 400.784 305.863 362.09 380.991 389.627C456.12 417.165 494.858 500.674 467.294 575.877C439.764 650.987 356.2 689.773 281.071 662.236Z" fill="url(#paint14_linear_415_10)"/>
          <path d="M340.402 397.126C276.137 373.571 204.688 406.657 181.11 470.985C157.566 535.22 190.674 606.735 254.939 630.29C319.203 653.845 390.652 620.759 414.23 556.431C437.716 492.07 404.666 420.681 340.402 397.126ZM256.29 626.603C194.051 603.791 161.992 534.542 184.793 472.334C207.628 410.034 276.811 377.999 339.05 400.812C401.289 423.625 433.349 492.873 410.547 555.081C387.746 617.289 318.529 649.416 256.29 626.603Z" fill="url(#paint15_linear_415_10)"/>
          <path d="M298.493 408.212C247.118 389.381 189.982 415.9 171.167 467.233C152.318 518.659 178.815 575.728 230.19 594.559C281.565 613.389 338.7 586.87 357.516 535.537C376.331 484.204 349.867 427.042 298.493 408.212ZM231.507 590.964C182.158 572.876 156.652 517.947 174.758 468.55C192.864 419.152 247.734 393.684 297.175 411.806C346.524 429.894 372.031 484.823 353.925 534.221C335.727 583.584 280.857 609.053 231.507 590.964Z" fill="url(#paint16_linear_415_10)"/>
          <path d="M267.673 423.468C229.188 409.361 186.399 429.222 172.279 467.745C158.159 506.267 177.977 549.076 216.462 563.182C254.948 577.288 297.736 557.427 311.856 518.905C325.976 480.382 306.158 437.574 267.673 423.468ZM217.814 559.495C181.354 546.132 162.493 505.556 175.87 469.061C189.246 432.566 229.77 413.757 266.321 427.154C302.781 440.518 321.642 481.093 308.266 517.589C294.889 554.084 254.273 572.859 217.814 559.495Z" fill="url(#paint17_linear_415_10)"/>
          <path d="M247.97 442.801C222.375 433.42 193.933 446.621 184.542 472.241C175.152 497.861 188.325 526.316 213.921 535.697C239.516 545.079 267.958 531.878 277.348 506.258C286.739 480.637 273.566 452.183 247.97 442.801ZM215.272 532.011C191.702 523.372 179.486 497.15 188.167 473.465C196.814 449.872 223.117 437.664 246.687 446.303C270.256 454.942 282.473 481.164 273.791 504.849C265.11 528.534 238.842 540.65 215.272 532.011Z" fill="url(#paint18_linear_415_10)"/>
        </g>
        <defs>
          <linearGradient id="paint0_linear_415_10" x1="965.183" y1="889.486" x2="1090.72" y2="822.469" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint1_linear_415_10" x1="916.25" y1="865.035" x2="1035.5" y2="801.393" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint2_linear_415_10" x1="867.314" y1="840.476" x2="980.288" y2="780.173" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint3_linear_415_10" x1="818.348" y1="816.009" x2="925.046" y2="759.044" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint4_linear_415_10" x1="769.47" y1="791.409" x2="869.874" y2="737.816" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint5_linear_415_10" x1="720.479" y1="766.998" x2="814.618" y2="716.747" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint6_linear_415_10" x1="671.55" y1="742.483" x2="759.399" y2="695.586" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint7_linear_415_10" x1="622.655" y1="717.872" x2="704.215" y2="674.329" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint8_linear_415_10" x1="573.683" y1="693.471" x2="648.973" y2="653.288" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint9_linear_415_10" x1="524.77" y1="668.858" x2="593.775" y2="632.011" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint10_linear_415_10" x1="475.797" y1="644.452" x2="538.531" y2="610.964" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint11_linear_415_10" x1="426.808" y1="620.105" x2="483.252" y2="589.972" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint12_linear_415_10" x1="377.91" y1="595.495" x2="428.065" y2="568.716" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint13_linear_415_10" x1="328.938" y1="571.093" x2="372.824" y2="547.673" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint14_linear_415_10" x1="291.144" y1="550.548" x2="328.744" y2="530.465" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint15_linear_415_10" x1="264.415" y1="534.303" x2="295.745" y2="517.579" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint16_linear_415_10" x1="237.76" y1="517.844" x2="262.8" y2="504.474" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint17_linear_415_10" x1="222.151" y1="505.669" x2="240.922" y2="495.659" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
          <linearGradient id="paint18_linear_415_10" x1="217.703" y1="497.457" x2="230.184" y2="490.801" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
            <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
            <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
          </linearGradient>
        </defs>
      </svg>
    </section>
<?php endif;?>

    <!-- Шлях клієнта -->
<?php
  $customerJourneyBlTitle = carbon_get_post_meta( get_the_ID(), 'security_steps_block_title'.security_lang_prefix());
	$customerJourneyList = carbon_get_post_meta( get_the_ID(), 'security_steps_list'.security_lang_prefix());

	if ( $customerJourneyBlTitle && $customerJourneyList ):
?>
    <section class="steps animation-tracking" id="how-we-work">
      <div class="container">
        <div class="row">
          <h2 class="block-title col-12 small-title big-margin first-up"><?php echo $customerJourneyBlTitle;?></h2>
        </div>
        <div class="row second-up">
          <div class="content col-12">
			  <?php foreach( $customerJourneyList as $item ):?>
                <div class="step-item">
                  <div class="pic-wrapper">
                    <img src="<?php echo $item['image'];?>" alt="" class="svg-pic">
                  </div>
                  <h3 class="step-name"><?php echo $item['title'];?></h3>
                  <p class="description"><?php echo $item['description'];?></p>
                  <div class="step-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                      <path d="M17.5 4L17.5 32M17.5 32L27 22.1176M17.5 32L8 22.1176" stroke="url(#paint0_linear_182_6771)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                      <defs>
                        <linearGradient id="paint0_linear_182_6771" x1="28.5657" y1="5.82778" x2="8.24318" y2="28.0232" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#D8AE5E"/>
                          <stop offset="1" stop-color="#F2D7A5"/>
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                </div>
			  <?php endforeach;?>
          </div>
        </div>
      </div>
    </section>
<?php endif;?>


<?php
	$contactFormTitle = carbon_get_post_meta(get_the_ID(), 'security_contact_form_block_title'.security_lang_prefix());
	$contactFormSubtitle = carbon_get_post_meta(get_the_ID(), 'security_contact_form_block_subtitle'.security_lang_prefix());

	if ( $contactFormSubtitle && $contactFormTitle ):
		?>
      <!-- Contact form -->
      <section class="contact-form indent-bottom-small indent-top-small animation-tracking" id="contact-form">
        <div class="container">
          <div class="row">
            <div class="content col-12">
              <div class="form-wrapper">
                <h2 class="block-title small-title small-margin first-up"><?php echo $contactFormTitle;?></h2>
                <p class="subtitle first-up"><?php echo $contactFormSubtitle;?></p>
                <div class="second-up">
					<?php get_template_part('template-parts/form');?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
	<?php endif;?>

<?php get_footer();
