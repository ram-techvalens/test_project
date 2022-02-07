<h3 id="custom-fields"><?php _e( 'New Field', 'wpas-cf' ); ?><span></span></h3>
<table class="wpas-cf-table">
<tbody class="wpas-cf-wrapper-object wpas-cf-field-new">
	<!-- Title -->
	<tr class="wpas-cf-title">
		<th class="first">
			<label>
				<?php _e( 'Title', 'wpas-cf' ) ?> 
				<span class="required">*</span>
			</label>
		</th>
		<td class="second wpas-cf-input wpas-cf-title-field">
			<p class="description"><?php _e( 'The “human readable” name of your custom field. That’s the name that’ll be shown in the submission form', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Title', 'wpas-cf' ) ?>" required>
		</td>
	</tr>

	<!-- Name -->
	<tr class="wpas-cf-name">
		<th class="first">
			<label>
				<?php _e( 'Name', 'wpas-cf' ) ?> 
				<span class="required">*</span>
			</label>
		</th>
		<td class="second wpas-cf-input wpas-cf-name-field">
			<p class="description"><?php _e( 'A text string identifying your custom field. It should consist of only lowercase letters, numbers and underscore, for instance my_custom_field', 'wpas-cf' ) ?></p>
			<input type="text" name="name" placeholder="<?php _e( 'Name', 'wpas-cf' ) ?>" pattern="^[_a-z0-9]*$" title="<?php _e( 'The name should consist of only lowercase letters, numbers and underscore', 'wpas-cf' ); ?>" required >
		</td>
	</tr>

	<!-- Field type -->
	<tr class="wpas-cf-field-type">
		<th class="first">
			<label>
				<?php _e( 'Field type', 'wpas-cf' ) ?> 
				<span class="required">*</span>
			</label>
		</th>
		<td class="second wpas-cf-input wpas-cf-field-type-field">
			<p class="description"><?php _e( 'The type of field that you want to register', 'wpas-cf' ) ?></p>
			<select required>
				<option value="text"><?php _e( 'Text', 'wpas-cf') ?></option>
				<option value="url"><?php _e( 'URL', 'wpas-cf') ?></option>
				<option value="email"><?php _e( 'Email', 'wpas-cf') ?></option>
				<option value="number"><?php _e( 'Number', 'wpas-cf') ?></option>
				<option value="date-field"><?php _e( 'Date', 'wpas-cf') ?></option>	
				<option value="password"><?php _e( 'Password', 'wpas-cf') ?></option>
				<option value="upload"><?php _e( 'Upload', 'wpas-cf') ?></option>
				<option value="select"><?php _e( 'Select', 'wpas-cf') ?></option>
				<option value="checkbox"><?php _e( 'Checkbox', 'wpas-cf') ?></option>
				<option value="radio"><?php _e( 'Radio', 'wpas-cf') ?></option>
				<option value="textarea"><?php _e( 'Textarea', 'wpas-cf') ?></option>
				<option value="wysiwyg"><?php _e( 'WYSIWYG', 'wpas-cf') ?></option>
				<option value="taxonomy"><?php _e( 'Taxonomy', 'wpas-cf') ?></option>
			</select>
		</td>
	</tr>
	
	<!-- hide option -->
	<tr class="wpas-cf-options-hide">
		<th class="first">
			<label><?php _e( 'Hide Field', 'wpas-cf' ); ?></label>
		</th>
		<td class="second wpas-cf-options-hide">
			<p class="description"><?php _e( 'Turn off this field completely - when this item is checked this field will not show up on the back end or the front end.', 'wpas-cf' ) ?></p>			
			<div class="wpas-cf-options-hide-hide-wrapper">
				<input type="checkbox" value="no"><?php _e( 'Hide', 'wpas-cf' ); ?>				
			</div>
		</td>
	</tr>
	<!-- fields order -->
	<tr class="wpas-cf-options-field-order">
		<th class="first">
			<label><?php _e( 'Sort Order', 'wpas-cf' ); ?></label>
		</th>
		<td class="second wpas-cf-options-field-order">
			<p class="description"><?php _e( 'The order in which this field appears on the front end ticket screen', 'wpas-cf' ) ?></p>
			<div class="wpas-cf-field-order-wrapper">
				<input type="number" value="0" class="wpas-cf-field-order" >
			</div>
		</td>
	</tr>
	
	<!-- Options for checkbox/radio/select -->
	<tr class="wpas-cf-options">
		<th class="first">
			<label><?php _e( 'Options ', 'wpas-cf' ); ?></label>
		</th>
		<td class="second wpas-cf-field-type-options">
			<div class="wpas-cf-options-wrapper"></div>
			<button id="wpas-cf-add-option" type="button" class="button-secondary"><?php _e( 'Add option', 'wpas-cf' ) ?></button>
		</td>
	</tr>

	<!-- Options for textarea field-->
	<tr class="wpas-cf-options-textarea">
		<th class="first">
			<label><?php _e( 'Options', 'wpas-cf' ); ?></label>
		</th>
		<td class="second wpas-cf-textarea-options">
			<div class="wpas-cf-textarea-options-wrapper">
				<input type="text" class="wpas-cf-textarea-rows" placeholder="Rows">
				<input type="text" class="wpas-cf-textarea-cols" placeholder="Cols">
			</div>
		</td>
	</tr>

	<!-- Options for upload field-->
	<tr class="wpas-cf-options-upload">
		<th class="first">
			<label><?php _e( 'Options', 'wpas-cf' ); ?></label>
		</th>
		<td class="second wpas-cf-upload-options">
			<div class="wpas-cf-textarea-upload-wrapper">
				 <input type="checkbox"><?php _e( 'Multiple', 'wpas-cf' ); ?>				
			</div>
		</td>
	</tr>

	<!-- Options for WYSIWYG field -->
	<tr class="wpas-cf-options-wysiwyg">
		<th class="first">
			<label><?php _e( 'Options', 'wpas-cf' ); ?></label>
		</th>
		<td class="second wpas-cf-wysiwyg-options">
			<div class="wpas-cf-wysiwyg-options-wrapper"></div>
			<button id="wpas-cf-add-wysiwyg-option" type="button" class="button-secondary"><?php _e( 'Add option', 'wpas-cf' ) ?></button>
		</td>
	</tr>

	<!-- Options for taxonomy field -->
	<tr class="wpas-cf-options-taxonomy">
		<th class="first">
			<label><?php _e( 'Options', 'wpas-cf' ); ?></label>
		</th>
		<td class="second wpas-cf-taxonomy-options">
			<div class="wpas-cf-taxonomy-wrapper">
				<div>
					<p class="description"><?php _e( 'Whether or not this taxonomy should act as a standard WordPress taxonomy. If set to false it will be used as a “fake” taxonomy and displayed as a basic select input. Please note that if it is set to false and you want to display the values in the tickets list screen you need to set $show_column to true', 'wpas-cf' ) ?>
					</p>

					<label><?php _e( 'Standard taxonomy', 'wpas-cf' ); ?></label>
					<select class="wpas-cf-taxonomy-taxo-std">
						<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
						<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
					</select>
				</div>

				<div>
					<label><?php _e( 'Taxonomy singular name', 'wpas-cf' ); ?></label>
					<input class="wpas-cf-taxonomy-label" type="text" name="label" placeholder="<?php _e( 'Taxonomy singular name', 'wpas-cf' ) ?>">
				</div>
			
				<div>
					<label><?php _e( 'Taxonomy plural name', 'wpas-cf' ); ?></label>
					<input class="wpas-cf-taxonomy-label-plural" type="text" name="label_plural" placeholder="<?php _e( 'Taxonomy plural name', 'wpas-cf' ) ?>">
				</div>

				<div>
					<label><?php _e( 'Hierarchical', 'wpas-cf' ); ?></label>
					<select class="wpas-cf-taxonomy-taxo-hierarchical">
						<option value="1" selected><?php _e( 'True', 'wpas-cf' ) ?></option>
						<option value="0"><?php _e( 'False', 'wpas-cf' ) ?></option>
					</select>
				</div>
			</div>
		</td>
	</tr>

	<!-- Placeholder -->
	<tr class="wpas-cf-placeholder">
		<th class="first">
			<label><?php _e( 'Placeholder', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-placeholder-field">
			<p class="description"><?php _e( 'Placeholder to use with input fields', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Placeholder', 'wpas-cf' ) ?>">
		</td>
	</tr>

	<!-- Default -->
	<tr class="wpas-cf-default">
		<th class="first">
			<label><?php _e( 'Default', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-default-field">
			<p class="description"><?php _e( 'The default value for your custom field', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Default Value', 'wpas-cf' ) ?>">
		</td>
	</tr>

	<!-- Required field -->
	<tr class="wpas-cf-required">
		<th class="first">
			<label><?php _e( 'Required', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-required-field">
			<p class="description"><?php _e( 'Whether or not this field is required for submission. If set to false a ticket can be submitted even if this field is not filled-in', 'wpas-cf' ) ?></p>
			<select>
				<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>
	
	<!-- Backend_only field -->
	<tr class="wpas-cf-backend-only">
		<th class="first">
			<label><?php _e( 'Backend Only', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-backendonly-field">
			<p class="description"><?php _e( 'When set to true, this field will only show in wp-admin when viewing a ticket. It will NOT show up on the front-end at all! (Applies to version 4.0.0 and later of Awesome Support)', 'wpas-cf' ) ?></p>
			<select>
				<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>
	
	<!-- Show In Frontend List field -->
	<tr class="wpas-cf-show-frontend-list">
		<th class="first">
			<label><?php _e( 'Show In Front-end List?', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-show-frontend-list-field">
			<p class="description"><?php _e( 'When set to true, this field will show up in the front-end ticket list screen for existing tickets. This setting has no effect if the Backend Only option is set to true above. (Applies to version 4.1.0 and later of Awesome Support)', 'wpas-cf' ) ?></p>
			<select>
				<option value="1" selected><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" ><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>	
	
	<!-- Show In Frontend Detail field -->
	<tr class="wpas-cf-show-frontend-detail">
		<th class="first">
			<label><?php _e( 'Show In Front-end Detail Screen?', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-show-frontend-detail-field">
			<p class="description"><?php _e( 'When set to true, this field will show up in the front-end ticket detail screen for existing tickets. This setting has no effect if the Backend Only option is set to true above. (Applies to version 4.1.0 and later of Awesome Support)', 'wpas-cf' ) ?></p>
			<select>
				<option value="1" selected><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" ><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>		
	
	<!-- Read only Attribute -->
	<tr class="wpas-cf-readonly">
		<th class="first">
			<label><?php _e( 'Read Only', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-readonly-field">
			<p class="description"><?php _e( 'Should the agent/admin be able to edit this field? (Applies to version 4.0.0 and later of Awesome Support)', 'wpas-cf' ) ?></p>
			<select>
				<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>	

	<!-- Log field -->
	<tr class="wpas-cf-log">
		<th class="first">
			<label><?php _e( 'Log', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-log-field">
			<p class="description"><?php _e( 'Whether or not to log the changes of values to this field. The log is shown in the ticket history in the back-end (seen by admins and agents)', 'wpas-cf' ) ?></p>
			<select>
				<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>

	<!-- Show column field -->
	<tr class="wpas-cf-show-column">
		<th class="first">
			<label><?php _e( 'Show column', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-show-column-field">
			<p class="description"><?php _e( 'Whether or not to show the field’s value in the tickets list screen on the backend (wp-admin)', 'wpas-cf' ) ?></p>
			<select>
				<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>

	<!-- Sortable column field -->
	<tr class="wpas-cf-sortable-column">
		<th class="first">
			<label><?php _e( 'Sortable column', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-sortable-column-field">
			<p class="description"><?php _e( 'Whether or not to make the column sortable (not compatible with taxonomy fields)', 'wpas-cf' ) ?></p>
			<select>
				<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>

	<!-- Filterable field -->
	<tr class="wpas-cf-filterable">
		<th class="first">
			<label><?php _e( 'Filterable', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-filterable-field">
			<p class="description"><?php _e( 'Whether or not to add a filter based on the field (for taxonomies only)', 'wpas-cf' ) ?></p>
			<select>
				<option value="1" selected><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0"><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>

	<!-- Capability field -->
	<tr class="wpas-cf-capability">
		<th class="first">
			<label><?php _e( 'Capability', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-capability-field">
			<p class="description"><?php _e( 'Required capability for editing the field value in the admin. If current user doesn’t have the required capability the field will be “read-only”', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Capability', 'wpas-cf' ) ?>">
		</td>
	</tr>

	<!-- Description field (Used to be called Admin Description -->
	<tr class="wpas-cf-desc">
		<th class="first">
			<label><?php _e( 'Description', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-desc-field">
			<p class="description"><?php _e( 'Description shown in the ticket edit screen (admin) as well as under the field when user is entering a new ticket', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Description', 'wpas-cf' ) ?>">
		</td>
	</tr>

	<!-- html5_pattern field -->
	<tr class="wpas-cf-html5-pattern">
		<th class="first">
			<label><?php _e( 'HTML5 Pattern', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-html5-pattern-field">
			<p class="description"><?php _e( 'Use this to declare an HTML5 validation pattern to control what is allowed', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'HTML5 Pattern', 'wpas-cf' ) ?>">
		</td>
	</tr>

	<!-- Select2 field -->
	<tr class="wpas-cf-select2">
		<th class="first">
			<label><?php _e( 'Select2', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-select2-field">
			<p class="description"><?php _e( 'Make any select or taxonomy field searchable using jQuery select2', 'wpas-cf' ) ?></p>
			<select>
				<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>

	<!-- start section header -->
	<tr class="wpas-cf-header">
		<th class="wpas-cf-section-header-first">
			<h2><?php _e( 'CSS Options', 'wpas-cf' ) ?></h2>
		</th>
		<td class="wpas-cf-section-header-second">
			<h2><?php _e( 'Additional CSS Classes', 'wpas-cf' ) ?></h2>		
		</td>
	</tr>
	
	<!-- start section sub-header -->
	<tr class="wpas-cf-p">
		<th class="wpas-cf-section-sub-header-first">

		</th>
		<td class="wpas-cf-section-sub-header-second">
			<p><?php _e( 'Use these options to set additional CSS classes for your custom field.  This is useful when you have BootStrap enabled for example - then you can apply an appropriate BootStrap class here.', 'wpas-cf' ) ?></p>
			<p><?php _e( 'Awesome Support Core 4.3.0 or later must also be installed.', 'wpas-cf' ) ?></p>
		</td>
	</tr>		
	
	<!-- extra_wrapper_css_classes -->
	<tr class="wpas-cf-extra-wrapper-css-classes">
		<th class="first">
			<label><?php _e( 'Extra CSS Field Block Wrapper Classes for Front-end', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-extra-wrapper-css-classes-field">
			<p class="description"><?php _e( 'Use this to add any additional CSS classes that wrap the custom field block when its rendered on the front-end form', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Extra CSS Wrapper Class Name(s)', 'wpas-cf' ) ?>">
		</td>
	</tr>
	
	<!-- extra_field_css_classes -->
	<tr class="wpas-cf-extra_field-css-classes">
		<th class="first">
			<label><?php _e( 'Extra CSS Field Wrapper Classes for Front-end', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-extra-field-css-classes-field">
			<p class="description"><?php _e( 'Use this to add any additional CSS classes that wrap the custom field form control when its rendered on the front-end form', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Extra CSS Wrapper Class Name(s)', 'wpas-cf' ) ?>">
		</td>
	</tr>
	
	<!-- extra_wrapper_css_classes-be -->
	<tr class="wpas-cf-extra-wrapper-css-classes-be">
		<th class="first">
			<label><?php _e( 'Extra CSS Field Block Wrapper Classes for Back-end', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-extra-wrapper-css-classes-be-field">
			<p class="description"><?php _e( 'Use this to add any additional CSS classes that wrap the custom field block when its rendered in wp-admin', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Extra CSS Wrapper Class Name(s)', 'wpas-cf' ) ?>">
		</td>
	</tr>
	
	<!-- extra_field_css_classes-be -->
	<tr class="wpas-cf-extra_field-css-classes-be">
		<th class="first">
			<label><?php _e( 'Extra CSS Field Wrapper Classes for Back-end', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-extra-field-css-classes-be-field">
			<p class="description"><?php _e( 'Use this to add any additional CSS classes that wrap the custom field form control when its rendered in wp-admin', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Extra CSS Wrapper Class Name(s)', 'wpas-cf' ) ?>">
		</td>
	</tr>

	<!-- start section header -->
	<tr class="wpas-cf-header">
		<th class="wpas-cf-section-header-first">
			<h2><?php _e( 'Bootstrap 4.0 options', 'wpas-cf' ) ?></h2>
		</th>
		<td class="wpas-cf-section-header-second">
			<h2><?php _e( '(Experimental)', 'wpas-cf' ) ?></h2>		
		</td>
	</tr>
	
	<!-- start section sub-header -->
	<tr class="wpas-cf-p">
		<th class="wpas-cf-section-sub-header-first">

		</th>
		<td class="wpas-cf-section-sub-header-second">
			<p><?php _e( 'The options in this section only work with Bootstrap 4.0 enabled and may or may not work properly depending on your theme and other plugins you have installed.', 'wpas-cf' ) ?></p>
			<p><?php _e( 'Awesome Support Core 4.3.0 or later must also be installed.', 'wpas-cf' ) ?></p>
		</td>
	</tr>		
	
	<!-- boot_strap_row_fe_start field -->
	<tr class="wpas-cf-boot-strap-row-fe-start">
		<th class="first">
			<label><?php _e( 'Start New Row?', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-boot-strap-row-fe-start-field">
			<p class="description"><?php _e( 'Start a new row with this field?', 'wpas-cf' ) ?></p>
			<select>
				<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>
	
	<!-- boot_strap_row_fe_end field -->
	<tr class="wpas-cf-boot-strap-row-fe-end">
		<th class="first">
			<label><?php _e( 'End the Current Row?', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-boot-strap-row-fe-end-field">
			<p class="description"><?php _e( 'End the current row with this field?', 'wpas-cf' ) ?></p>
			<select>
				<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>
	
	<!-- boot_strap_column_fe field -->
	<tr class="wpas-cf-boot-strap-column-fe">
		<th class="first">
			<label><?php _e( 'Place Field in a Column?', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-boot-strap-column-fe-field">
			<p class="description"><?php _e( 'Place field into a separate column?', 'wpas-cf' ) ?></p>
			<select>
				<option value="1"><?php _e( 'True', 'wpas-cf' ) ?></option>
				<option value="0" selected><?php _e( 'False', 'wpas-cf' ) ?></option>
			</select>
		</td>
	</tr>

	<!-- start section header -->
	<tr class="wpas-cf-header">
		<th class="wpas-cf-section-header-first">
			<h2><?php _e( 'Callback Functions', 'wpas-cf' ) ?></h2>
		</th>
		<td class="wpas-cf-section-header-second">
			<h2><?php _e( 'Advanced: Callback Functions', 'wpas-cf' ) ?></h2>		
		</td>
	</tr>
	
	<!-- start section sub-header -->
	<tr class="wpas-cf-p">
		<th class="wpas-cf-section-sub-header-first">

		</th>
		<td class="wpas-cf-section-sub-header-second">
			<p><?php _e( 'These callback function names can be used to control how certain field types are displayed in lists.', 'wpas-cf' ) ?></p>
			<p><?php _e( 'Do not enter anything in these fields unless you are absolutely certain you know what you\'re doing.', 'wpas-cf' ) ?></p>
		</td>
	</tr>
	
	<!-- save_callback field -->
	<tr class="wpas-cf-save-callback">
		<th class="first">
			<label><?php _e( 'Callback function when saving field', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-save-callback-field">
			<p class="description"><?php _e( 'Callback function when saving field', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Callback Function Name', 'wpas-cf' ) ?>">
		</td>
	</tr>
	
	<!-- column_callback field -->
	<tr class="wpas-cf-column-callback">
		<th class="first">
			<label><?php _e( 'Callback function displaying column', 'wpas-cf' ) ?></label>
		</th>
		<td class="second wpas-cf-input wpas-cf-column-callback-field">
			<p class="description"><?php _e( 'Callback function displaying column', 'wpas-cf' ) ?></p>
			<input type="text" name="input" placeholder="<?php _e( 'Callback Function Name', 'wpas-cf' ) ?>">
		</td>
	</tr>	

	<tr class="wpas-cf-remove">
		<th class="first">
			<label><?php _e( 'Remove field', 'wpas-cf' ) ?></label>
		</th>
		<td class="second">
			<button id="wpas-cf-remove" class="button-secondary"><?php _e('Remove field', 'wpas-cf' ); ?></button>
		</td>
	</tr>	
</tbody><!-- ./wpas-cf-wrapper-object -->
</table>
