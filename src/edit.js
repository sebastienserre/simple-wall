import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { TextControl, PanelBody } from '@wordpress/components';
import { Fragment } from '@wordpress/element'

import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit( { attributes, setAttributes, isSelected } ) {
	const {
        url,
		width,
		height
    } = attributes;

	return (
		<Fragment>
			<InspectorControls>
				<PanelBody
				title={ __( 'Settings', 'simple-wall' ) }
				>
					<TextControl
						label={ __( 'Width', 'simple-wall' ) }
						value={ width }
						type="number"
						onChange={ ( value ) =>
							setAttributes( { width: value } )
						}
					/>
					<TextControl
						label={ __( 'Height', 'simple-wall' ) }
						value={ height }
						type="number"
						onChange={ ( value ) =>
							setAttributes( { height: value } )
						}
					/>
				</PanelBody>
			</InspectorControls>
			<div { ...useBlockProps() }>
				{ isSelected ? (
					<TextControl
						label={ __( 'Slug', 'simple-wall' ) }
						value={ url }
						onChange={ ( value ) =>
							setAttributes( { url: value } )
						}
					/>
				) : (
					<div
					className="fb-page"
					data-href={ url }
					data-tabs="timeline"
					data-width={ width }
             		data-height={ height }
					data-small-header="false"
					data-adapt-container-width="true"
					data-hide-cover="false"
             		data-show-facepile="true"
					><p>{ __( 'Facebook page', 'simple-wall' ) }</p></div>
				) }
			</div>
		</Fragment>

	);
}
