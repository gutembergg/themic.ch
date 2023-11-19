import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

const MY_TEMPLATE = [
  ['core/heading', { placeholder: 'Titre' }],
  ['core/paragraph', { placeholder: 'Contenu' }],
  ['custom-gutenberg-cards/epg-custom-block-gutenberg-card-button'],
];

const ALLOWED_BLOCKS = [
  'core/heading',
  'core/paragraph',
  'custom-gutenberg-cards/epg-custom-block-gutenberg-card-button',
];

export default wp.blocks.registerBlockType(
  'custom-gutenberg-cards/epg-custom-block-gutenberg-card',
  {
    title: 'Banner acceuil',

    icon: 'embed-generic',

    category: 'design',

    keywords: ['card', 'custom'],

    attributes: {
      align: {
        type: 'string',
        default: 'wide',
      },
    },

    supports: { align: ['wide'] },

    edit: function () {
      const blockProps = useBlockProps({
        className: 'wp-block-cta',
      });

      const wrapperProps = useBlockProps.save({
        className: 'wp-block-cta__wrapper',
      });

      return (
        <div {...blockProps} className="wp-block-cta">
          <h1>Test</h1>
          {/*  <div {...wrapperProps}>
            <InnerBlocks
              template={MY_TEMPLATE}
              allowedBlocks={ALLOWED_BLOCKS}
            />
          </div> */}
        </div>
      );
    },

    save: function () {
      const blockProps = useBlockProps.save({
        className: 'wp-block-cta alignwide',
      });

      const wrapperProps = useBlockProps.save({
        className: 'wp-block-cta__wrapper',
      });

      return (
        <div {...blockProps}>
          <div {...wrapperProps}>
            <InnerBlocks.Content />
          </div>
        </div>
      );
    },
  }
);
