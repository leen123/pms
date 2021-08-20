<style>
    .locale{
        position:absolute; 
        font-size: medium;
        padding: 1rem;
    }
    .locale>a {
        text-decoration: none;
        color: white;
    }
</style>

<div class="locale">
    <a href="{{ route('locale','en')}}">en</a>
    |
    <a href="{{route('locale','ar')}}">ar</a>
</div>