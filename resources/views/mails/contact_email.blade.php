<!DOCTYPE html>
<html>
<head>
    <title>ITCourse</title>
</head>

	<body>
		<h2>Learning and Enquiry E-mail</h2>
		<br/>
		Dear Admin, <br>
		My Name is {{ $data->names }}.
		I am writing this email to enquire on the Following<br>
		    <b>Subject</b>:{{ $data->subject }}<br>
		    <b>Question</b>:{{ $data->message }}<br>
		You can reach me back on this email {{ $data->email }}


		Kindly feel free to contact me anytime from the details above.<br>

		Thanks and kind regards,<br>
		Yours:{{ $data->names }} <br>

	</body>
</html>

