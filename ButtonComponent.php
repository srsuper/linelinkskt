/**
 * ButtonComponentBuilder constructor.
 *
 * @param TemplateActionBuilder $actionBuilder
 * @param int|null $flex
 * @param ComponentMargin|null $margin
 * @param ComponentButtonHeight|null $height
 * @param ComponentButtonStyle|null $style
 * @param string|null $color
 * @param ComponentGravity|null $gravity
 */
/**  
    public function __construct(
        $actionBuilder,
        $flex = null,
        $margin = null,
        $height = null,
        $style = null,
        $color = null,
        $gravity = null
    )
*/
 
$textReplyMessage = new BubbleContainerBuilder(
            "ltr",  // กำหนด NULL หรือ "ltr" หรือ "rtl"
            NULL,NULL,
            new BoxComponentBuilder(
                "vertical",
                array(
                    new ButtonComponentBuilder(
                        new UriTemplateActionBuilder("Primary style button","http://niik.in"),
                        NULL,NULL,NULL,"primary"
                    ),
                    new ButtonComponentBuilder(
                        new UriTemplateActionBuilder("Secondary  style button","http://niik.in"),
                        NULL,NULL,NULL,"secondary"
                    ),          
                    new ButtonComponentBuilder(
                        new UriTemplateActionBuilder("Link  style button","http://niik.in"),
                        NULL,NULL,NULL,"link"
                    ),                                  
                ),
                0,"md"
            )
        );      
 
$replyData = new FlexMessageBuilder("Flex",$textReplyMessage);
