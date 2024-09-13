(function (blocks, element, editor, components) {
  var el = element.createElement;
  var RichText = editor.RichText;
  var MediaUpload = editor.MediaUpload;
  var Button = components.Button;

  blocks.registerBlockType("my-simple-block/example", {
    title: "My Simple Block",
    icon: "smiley",
    category: "common",

    attributes: {
      heading: {
        type: "string",
        source: "html",
        selector: "h2",
      },
      content: {
        type: "string",
        source: "html",
        selector: "p",
      },
      buttonLabel: {
        type: "string",
        source: "html",
        selector: "span",
      },
      imageUrl: {
        type: "string",
        source: "attribute",
        selector: "img",
        attribute: "src",
      },
      imageAlt: {
        type: "string",
        source: "attribute",
        selector: "img",
        attribute: "alt",
        default: "",
      },
    },

    edit: function (props) {
      var attributes = props.attributes;
      var setAttributes = props.setAttributes;

      return el(
        "div",
        { className: "edit-div" },
        el(
          "div",
          { className: "text-container" },
          // Heading
          el(RichText, {
            tagName: "h2",
            className: "heading",
            placeholder: "Enter heading...",
            value: attributes.heading,
            onChange: function (newHeading) {
              setAttributes({ heading: newHeading });
            },
          }),
          // Paragraph
          el(RichText, {
            tagName: "p",
            className: "content",
            placeholder: "Enter some content...",
            value: attributes.content,
            onChange: function (newContent) {
              setAttributes({ content: newContent });
            },
          }),
          // Button
          el(RichText, {
            tagName: "span",
            className: "mybutton",
            placeholder: "Enter button label...",
            value: attributes.buttonLabel,
            onChange: function (newButtonLabel) {
              setAttributes({ buttonLabel: newButtonLabel });
            },
          })
        ),

        el(
          "div",
          { className: "image-container" },
          el(MediaUpload, {
            onSelect: function (media) {
              setAttributes({ imageUrl: media.url, imageAlt: media.alt });
            },
            allowedTypes: ["image"],
            value: attributes.imageUrl,
            render: function (obj) {
              return el(
                Button,
                {
                  className: attributes.imageUrl
                    ? "image-button"
                    : "button button-large",
                  onClick: obj.open,
                },
                !attributes.imageUrl
                  ? "Upload Image"
                  : el("img", {
                      src: attributes.imageUrl,
                      alt: attributes.imageAlt,
                    })
              );
            },
          })
        )
      );
    },

    save: function (props) {
      var attributes = props.attributes;
      return el(
        "div",
        null,
        el(
          "div",
          { className: "text-container" },
          el(RichText.Content, {
            tagName: "h2",
            value: attributes.heading,
          }),
          el(RichText.Content, {
            tagName: "p",
            value: attributes.content,
          }),
          el(
            "button",
            {
              className: "mybutton",
            },
            attributes.buttonLabel
          )
        ),
        el(
          "div",
          { className: "image-container" },
          attributes.imageUrl &&
            el("img", {
              src: attributes.imageUrl,
              alt: attributes.imageAlt,
            })
        )
      );
    },
  });
})(
  window.wp.blocks,
  window.wp.element,
  window.wp.blockEditor || window.wp.editor,
  window.wp.components
);
