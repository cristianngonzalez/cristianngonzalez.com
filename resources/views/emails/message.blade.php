@include('emails.partials.header')


<!---------------------------------------------------------------------------------------------------------------->
<!--First Paragraph-->
<tr>
    <td style="padding:30px;background-color:#ffffff;">

        {{$msg}}
		
	</td>
</tr>
<!--End first paragraph-->
<!---------------------------------------------------------------------------------------------------------------->
							
@include('emails.partials.profile')
@include('emails.partials.footer')