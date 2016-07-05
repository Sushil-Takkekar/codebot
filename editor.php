<html>
	<head>
		<title>Editor</title>
		<?php include 'head_css.php';	?>
	</head>
	<body>
		<?php include 'header.php'; ?>

		<div class="editor-pg-cntnr">
			<div class="row" style="margin-bottom: 0px;padding-top: 10px;">
				<div class="col s6 center-align">
					<button class="waves-effect waves-light btn blue-black darken-4 sbmt-btn-edit" id="show-op" type="submit" name="editor_submit" onclick="sendCode();">Show Output</button>
				</div>
			</div>

			<div class="row">
				<div class="col s6 center-align">
				
		            <div class="row">
		            	<div class="input-field col s11 edit-area-L">
		            	<textarea name="codeBox" id="codeBox" class="materialize-textarea editing-area" rows="10" cols="50"></textarea>
		          		</div>
		          	</div>
		        </form>
		        </div>

		        <div class="col s6 center-align">
		            <div class="row">
		            	<div class="input-field col s11 edit-area-L">
		            	<!-- <textarea disabled name="outputBox" id="outputBox" class="materialize-textarea editing-area" rows="10" cols="50"></textarea> -->
		            	<div name="outputBox" id="outputBox" class="materialize-textarea editing-area" rows="10" cols="50"></div>
		          		</div>
		          	</div>
		        </div>

		    </div>
		</div>    
		
		<?php include 'head_js.php'; ?>
	</body>
</html>