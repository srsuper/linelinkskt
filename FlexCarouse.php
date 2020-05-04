/**
 * CarouselContainerBuilder  constructor.
 *
 * @param BubbleContainerBuilder[] $containerBuilders
 */
/*public function __construct($containerBuilders)
{
    $this->containerBuilders = $containerBuilders;
}
    */
     
$textReplyMessage = new CarouselContainerBuilder(
    array(
        new BubbleContainerBuilder(
            "ltr",  // กำหนด NULL หรือ "ltr" หรือ "rtl"
            NULL,NULL,
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new TextComponentBuilder("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.",NULL,NULL,NULL,NULL,NULL,true)
                )
            ),
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new ButtonComponentBuilder(
                        new UriTemplateActionBuilder("GO","http://niik.in"),
                        NULL,NULL,NULL,"primary"
                    )
                )
            )
        ), // end bubble 1
        new BubbleContainerBuilder(
            "ltr",  // กำหนด NULL หรือ "ltr" หรือ "rtl"
            NULL,NULL,
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new TextComponentBuilder("Hello, World!",NULL,NULL,NULL,NULL,NULL,true)
                )
            ),
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new ButtonComponentBuilder(
                        new UriTemplateActionBuilder("GO","http://niik.in"),
                        NULL,NULL,NULL,"primary"
                    )
                )
            )
        ) // end bubble 2       
    )
);
$replyData = new FlexMessageBuilder("Flex",$textReplyMessage);
