@include('layouts.site.head')
<script>
$("title").text("Ajuda");
$('.favicon').attr("href", '{{ asset("assets/admin/images/icone.png") }}');
</script>

@include('layouts.site.menu')

<main>

    <section id="head">
        <h1>Ajuda</h1>
    </section>

</main>

@include('layouts.site.foot')