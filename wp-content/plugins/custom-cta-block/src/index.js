// Import necessary WordPress packages
const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls } = wp.blockEditor;
const { PanelBody, TextControl } = wp.components;
const { __ } = wp.i18n;

// Register the block
registerBlockType('custom/cta-block', {
    title: __('Call to Action', 'custom-cta-block'),
    icon: 'megaphone',
    category: 'common',
    attributes: {
        title: { type: 'string', source: 'html', selector: 'h2' },
        description: { type: 'string', source: 'html', selector: 'p' },
        buttonText: { type: 'string', default: 'Learn More' },
        buttonUrl: { type: 'string', default: '#' },
    },

    // Define the edit function
    edit: ({ attributes, setAttributes }) => {
        const { title, description, buttonText, buttonUrl } = attributes;

        return (
            <>
                <InspectorControls>
                    <PanelBody title={__('Button Settings', 'custom-cta-block')}>
                        <TextControl
                            label={__('Button URL', 'custom-cta-block')}
                            value={buttonUrl}
                            onChange={(value) => setAttributes({ buttonUrl: value })}
                        />
                    </PanelBody>
                </InspectorControls>
                <div className="cta-block">
                    <RichText
                        tagName="h2"
                        placeholder={__('Title...', 'custom-cta-block')}
                        value={title}
                        onChange={(value) => setAttributes({ title: value })}
                    />
                    <RichText
                        tagName="p"
                        placeholder={__('Description...', 'custom-cta-block')}
                        value={description}
                        onChange={(value) => setAttributes({ description: value })}
                    />
                    <RichText
                        tagName="span"
                        placeholder={__('Button Text', 'custom-cta-block')}
                        value={buttonText}
                        onChange={(value) => setAttributes({ buttonText: value })}
                    />
                </div>
            </>
        );
    },

    // Define the save function
    save: ({ attributes }) => {
        const { title, description, buttonText, buttonUrl } = attributes;
        return (
            <div className="cta-block">
                <h2>{title}</h2>
                <p>{description}</p>
                <a href={buttonUrl} className="cta-button">{buttonText}</a>
            </div>
        );
    },
});
