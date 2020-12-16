@component('mail::message')
# Introduction

We have recieved you application for the contest and we you will recieve an eamil from us
if your application qualifies for the contest.
  
PS:  Only qualified applicants will be contacted ;

@component('mail::button', ['url' => 'user.home'])
Home
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
