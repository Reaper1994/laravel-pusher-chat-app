import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head, Link} from '@inertiajs/react';
import React from "react";

export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 dark:text-gray-100">You're logged in!</div>

                    </div>
                </div>

                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center items-center my-10">
                    <div className="bg-white mx-auto  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <Link
                            as="button"
                            method="get"
                            href={route('chat.index')}
                            className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        >
                            Go To Chats
                        </Link>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
