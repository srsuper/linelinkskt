/**
 * BoxComponentBuilder constructor.
 *
 * @param ComponentLayout|string $layout
 * @param ComponentBuilder[] $componentBuilders
 * @param int|null $flex
 * @param ComponentSpacing|string|null $spacing
 * @param ComponentMargin|null $margin
 * @param TemplateActionBuilder|null $actionBuilder
 */
/**
public function __construct(
    $layout,
    $componentBuilders,
    $flex = null,
    $spacing = null,
    $margin = null,
    $actionBuilder = null
)
*/
     
$textReplyMessage = new BubbleContainerBuilder(
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
        );
 
$replyData = new FlexMessageBuilder("Flex",$textReplyMessage);
