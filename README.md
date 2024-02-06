Livewire quando usarlo
Quando stiamo creando qualcosa che interagirá con l'utente (un esempio sono i form)

Un componente livewire
- Parte visuale (View)
- Parte logica (Controller)

IMPORTANTISSIMO
Nella componente visuale il div di apertura e di chiusura SONO FONDAMENTALI

Attributo "public"
In livewire tutte le proprietá "public" sono immediatamente disponibili alla visa, la vista giá é a conoscenza dei valori delle proprietá

wire:model.live="title"
Caro livewire collegami con un filo l'input alla proprietá che ha nome "title", nel controller -> public $title

Action
Una action in livewire non é altro che un metodo, una funzione che deve fare qualcosa

render()
render é la funzione che consente di ricaricare la pagina senza che lo facciamo noi manualmente

ATTENZIONE
Livewire ha delle parole chiave che non possiamo utilizzare, ad esempio id, rest...ecc ecce

wire:model.lazy
viene utilizzato per far partire la fetch dopo che tolgo il focus dall'input


public function mount(){}
E' una funzione livewire che monta tutto ci di cui posso aver bisogno nel mio componente


@forelse ($collection as $item)
    codice foreach
@empty
    cosice se vuoto    
@endforelse

E' in soldoni un foreach che peró controlla prima se la collection é vuota, se lo é fa scattare il codice nell'empty se non lo é fa partire il foreach sulla collection

MOUNT
Quando inseriamo dei parametri al tag di richiamo del componente livewire, questi attributi diventano DI DIRITTO CON LO STESSO NOME parametri della funzione mount


find()
La funzione find funziona solo se riceve come parametro un id (un numerino intero e segna segno)

method e action necessari affinché venga correttamente composta la request, con livewire tutto questo non ci serve perché provvederá lui a creare una request con il metodo giusto e la action giusta