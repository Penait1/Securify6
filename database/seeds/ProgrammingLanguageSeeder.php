<?php

use Illuminate\Database\Seeder;

class ProgrammingLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            'markup',
            'css',
            'clike',
            'javascript',
            'abap',
            'actionscript',
            'ada',
            'apacheconf',
            'apl',
            'applescript',
            'arduino',
            'asciidoc',
            'aspnet',
            'autohotkey',
            'autoit',
            'bash',
            'basic',
            'batch',
            'bison',
            'brainfuck',
            'bro',
            'c',
            'csharp',
            'cpp',
            'coffeescript',
            'crystal',
            'css-extras',
            'd',
            'dart',
            'django',
            'diff',
            'docker',
            'eiffel',
            'elixir',
            'erlang',
            'fsharp',
            'flow',
            'fortran',
            'gherkin',
            'git',
            'glsl',
            'go',
            'graphql',
            'groovy',
            'haml',
            'handlebars',
            'haskell',
            'haxe',
            'http',
            'icon',
            'inform7',
            'ini',
            'j',
            'java',
            'jolie',
            'json',
            'julia',
            'keyman',
            'kotlin',
            'latex',
            'less',
            'livescript',
            'lolcode',
            'lua',
            'makefile',
            'markdown',
            'matlab',
            'mel',
            'mizar',
            'monkey',
            'n4js',
            'nasm',
            'nginx',
            'nim',
            'nix',
            'nsis',
            'objectivec',
            'ocaml',
            'opencl',
            'oz',
            'parigp',
            'parser',
            'pascal',
            'perl',
            'php',
            'php-extras',
            'powershell',
            'processing',
            'prolog',
            'properties',
            'protobuf',
            'pug',
            'puppet',
            'pure',
            'python',
            'q',
            'qore',
            'r',
            'jsx',
            'renpy',
            'reason',
            'rest',
            'rip',
            'roboconf',
            'ruby',
            'rust',
            'sas',
            'sass',
            'scss',
            'scala',
            'scheme',
            'smalltalk',
            'smarty',
            'sql',
            'stylus',
            'swift',
            'tcl',
            'textile',
            'twig',
            'typescript',
            'vbnet',
            'verilog',
            'vhdl',
            'vim',
            'wiki',
            'xeora',
            'xojo',
            'yaml',
        ];

        foreach($languages as $language) {
            \App\ProgrammingLanguage::create([
                'name' => $language,
                'created_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
