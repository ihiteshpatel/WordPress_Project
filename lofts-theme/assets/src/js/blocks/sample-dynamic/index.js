/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
import { registerBlockType } from '@wordpress/blocks';

/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * Internal dependencies
 */
import Edit from './edit';
import save from './save';

/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
registerBlockType('lofts-theme/sample-dynamic', {
	title: __('Sample Dynamic', 'lofts-theme'),
	icon: 'lock',
	description: __('Sample Dynamic block.', 'lofts-theme'),
	category: 'common',
	keywords: [__('sample', 'lofts-theme'), __('dynamic', 'lofts-theme')],
	attributes: {
		heading: {
			type: 'string',
			default: 'This is Default Heading',
		},
	},
	/**
	 * @see ./edit.js
	 */
	edit: Edit,
	/**
	 * @see ./save.js
	 */
	save,
});
