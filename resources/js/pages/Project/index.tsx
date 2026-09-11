import AuthLayout from '@/layouts/auth-layout';

export default function Index() {
    return (
        <AuthLayout
            title="Welcome"
            description="Welcome to the application"
        >
            <div>
                Hello!
            </div>
        </AuthLayout>
    );
}
