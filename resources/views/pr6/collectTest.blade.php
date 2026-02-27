<x-layout>
    <p>avg
    {{$average}}
</p>


<p> chunk  //баг с выводом ,но он если return сделать то вывод правельный//
    {{$chunks}}</p>


    <p>chunkWhile//баг с выводом ,но он если return сделать то вывод правельный//
        {{$chunks1}}</p>


        <p>collapsed
            {{$collapsed}}
        </p>

        <p>collect
            {{$collectionB}}
        </p>

        <p>combined
            {{$combined}}
        </p>

        <p>concatenated
            {{$concatenated}}
        </p>

        <p>contains
            {{$collection5}}
        </p>

        <p>
            containsOneItem
            {{$collection6}}
        </p>

        <p>countBy
            {{$counted}}
        </p>
        

        <p>crossJoin
            {{$matrix}}
        </p>

        <p>diff
            {{$diff}}
        </p>

        <p>diffAssoc
            {{$diff2}}</p>

        <p>diffKeys
            {{$diff3}}
        </p>

        <p>doesntContain
            {{$collection11}}
        </p>
        
</x-layout>