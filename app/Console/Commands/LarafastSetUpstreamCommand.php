<?php

    namespace App\Console\Commands;

    use Illuminate\Console\Command;
    use Symfony\Component\Process\Exception\ProcessFailedException;
    use Symfony\Component\Process\Process;

    class LarafastSetUpstreamCommand extends Command
    {
        protected $signature = 'larafast:set-upstream';

        protected $description = 'Command description';

        public function handle()
        {
            $commands = [
                'git remote add upstream https://github.com/karakhanyans-tools/larafast-tall.git',
                'git fetch upstream',
            ];

            foreach ($commands as $command) {
                $process = Process::fromShellCommandline($command);

                try {
                    $process->mustRun();
                    $this->info($process->getOutput());
                } catch (ProcessFailedException $exception) {
                    $this->error($exception->getMessage());
                    return 1;
                }
            }

            $this->info('Upstream repository added and fetched successfully.');

            return 0;
        }
    }
