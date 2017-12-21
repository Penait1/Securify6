
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Submission</h2>
            </div>
            {{--<div class="pull-right">--}}
                {{--<a class="btn btn-primary" href="{{ route('submissions.index') }}"> Back</a>--}}
            {{--</div>--}}
        </div>
    </div>
    <pre><code class="language-java">public class HelloWorld { public static void main(String[] args) { System.out.println("Hello World!"); } }</code></pre>

    <pre id='preCode' class="line-numbers language-java"><code id='codeText' class="language-java" >
                        {{--{{$challenge->content }}--}}
            import java.util.Scanner;

public class Life {

    @Override @Bind("One")
    public void show(boolean[][] grid){
        String s = "";
        for(boolean[] row : grid){
            for(boolean val : row)
                if(val)
                    s += "*";
                else
                    s += ".";
            s += "\n";
        }
        System.out.println(s);
    }

    public static boolean[][] gen(){
        boolean[][] grid = new boolean[10][10];
        for(int r = 0; r < 10; r++)
            for(int c = 0; c < 10; c++)
                if( Math.random() > 0.7 )
                    grid[r][c] = true;
        return grid;
    }

    public static void main(String[] args){
        boolean[][] world = gen();
        show(world);
        System.out.println();
        world = nextGen(world);
        show(world);
        Scanner s = new Scanner(System.in);
        while(s.nextLine().length() == 0){
            System.out.println();
            world = nextGen(world);
            show(world);

        }
    }

  // [...]
}
        </code></pre>


    @foreach($userSubmissions as $submission)

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Submission ID:</strong>
                {{ $submission->id}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Challenge:</strong>
                {{ $submission->challenge->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Participant:</strong>
                {{ $submission->participant->email}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RegelNR:</strong>
                {{ $submission->line_number}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comment:</strong>
                {{ $submission->comment}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Created at:</strong>
                {{ $submission->created_at}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Updated at:</strong>
                {{ $submission->updated_at}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Challenge Content:</strong>
                {{ $submission->challenge->content}}
            </div>
        </div>
        @endforeach

