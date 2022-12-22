
    <div>
        <label for="">Titre de l'article: </label>
        <!-- Si on a déjà envoyé le formulaire au serveur et qu'une erreur a été retourné, le premier argument ré-affiche ce que l'utilisateur a tapé dans le champ.
        Le deuxième vérifie si on a une variable $article et si $article->title a une valeur, le formulaire prend cette valeur, sinon, la valeur est null. -->
        <input type="text" name="title" value="{{old('title', isset($article->title) ? $article->title : null)}}">
    </div>
    <div>
        <label for="">Image pour l'article: </label>
        <input type="file" name="image"></div>
    <div>
        <label for="">Corps de l'article: </label>
        <textarea name="body"  cols="30" rows="10" placeholder ="Contenu de l'article"
        value="{{old('body', isset($article->body) ? $article->body : null)}}"></textarea>
    </div>
    <div>
        <label for="">Auteur de l'article:</label>
        <input type="text" name="author">
    </div>
    <button type="submit"> Add </button>
    
    
