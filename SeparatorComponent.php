/**
 * SeparatorComponentBuilder constructor.
 *
 * @param ComponentMargin|null $margin
 * @param string|null $color
 */
/* 
    public function __construct(
        $margin = null, 
        $color = null
    )
    */
     
$textReplyMessage = new BubbleContainerBuilder(
            "ltr",  // กำหนด NULL หรือ "ltr" หรือ "rtl"
            NULL,NULL,
            new BoxComponentBuilder(
                "vertical",
                array(
                    new BoxComponentBuilder(
                        "horizontal",
                        array(
                            new TextComponentBuilder("orange"),
                            new SeparatorComponentBuilder(),
                            new TextComponentBuilder("apple")                           
                        ),
                        0,"md"
                    ),
                    new SeparatorComponentBuilder(),    
                    new BoxComponentBuilder(
                        "horizontal",
                        array(
                            new TextComponentBuilder("grape"),
                            new SeparatorComponentBuilder(),
                            new TextComponentBuilder("lemon")                           
                        ),
                        0,"md"
                    )                                                                                                       
                ),
                0,"md"
            )
        );
 
$replyData = new FlexMessageBuilder("Flex",$textReplyMessage);
