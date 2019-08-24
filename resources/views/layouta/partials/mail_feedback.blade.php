<!DOCTYPE html>
<html>
<head>
    <title>New Message from {{$feedback->from}}</title>
</head>
<body>
    <h1>New Message from {{$feedback->from}} </h1>
    <a href="mailto:{{$feedback->email}}">{{$feedback->email}}</a>
    <p>Asking about : {{$feedback->subject}}</p>
    <p>Contact Number : {{$feedback->contact}}</p>
    
    
    <p>Query Regarding : {{$feedback->query}}</p>
    <p>{{$feedback->content}}</p>
</body>
</html>
