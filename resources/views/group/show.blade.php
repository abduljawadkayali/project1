<h2>Product Name: </h2>
<p>{{ $data->name }} </p>
<p> {{ ($data->classNum) }}</p> 

<h3>Product      to</h3>

<ul>
  
</ul>

<ul>
    @foreach($data->subjectes as $subject)
    <li>{{ $subject->name }}</li>
    @endforeach
</ul>
