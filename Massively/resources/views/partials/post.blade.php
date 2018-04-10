<!-- Posts -->
	<article>
		<header>
			<span class="date">{{ $message->created_at }}</span>
			<h2><a href="#">{{ $message->name }}</a></h2>
			<h3>{{ $message->email }}</h3>
		</header>
		<p>{{ $message->message }}</p>
		<ul class="actions">
		</ul>
	</article>