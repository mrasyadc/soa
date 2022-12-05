<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ThesisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('thesis')->insert([
            'title' => "Software engineering: a complete approach",
            'nrp' => "0521194000001",
            'abstract' => "Software engineering is a systematic engineering approach to software development.A software engineer is a person who applies the principles of software engineering to design, develop, maintain, test, and evaluate computer software. The term programmer is sometimes used as a synonym, but may also lack connotations of engineering education or skills. Engineering techniques are used to inform the software development process which involves the definition, implementation, assessment, measurement, management, change, and improvement of the software life cycle process itself. It heavily uses software configuration management which is about systematically controlling changes to the configuration, and maintaining the integrity and traceability of the configuration and code throughout the system life cycle. Modern processes use software versioning.",
            'keywords' => 'Software engineering, Development, Systematic',
            'storage' => Storage::url('thesis01.pdf'),
        ]);

        DB::table('thesis')->insert([
            'title' => "Forecasting Annual Stock Returns",
            'nrp' => "0521194000002",
            'abstract' => "Forecasting is the process of making predictions based on past and present data. Later these can be compared (resolved) against what happens. For example, a company might estimate their revenue in the next year, then compare it against the actual results. Prediction is a similar, but more general term. Forecasting might refer to specific formal statistical methods employing time series, cross-sectional or longitudinal data, or alternatively to less formal judgmental methods or the process of prediction and resolution itself. Usage can vary between areas of application: for example, in hydrology the terms 'forecast' and 'forecasting' are sometimes reserved for estimates of values at certain specific future times, while the term 'prediction' is used for more general estimates, such as the number of times floods will occur over a long period.",
            'keywords' => 'Forecasting, RNN, LSTM',
            'storage' => Storage::url('thesis02.pdf'),
        ]);
    }
}
